<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getFollowingTweets()
    {
        $friends = $this->following->pluck('id');

        return Tweet::whereIn('user_id', $friends)
                        ->orWhere('user_id', $this->id)
                        ->with(['user','impressions'])
                        ->latest()
                        ->get();
    }

    public static function generateUniqueId()
    {
        $identifier = rand();
        
        if (static::isProfileIdUnique($identifier)) {
            return $identifier;
        }

        return static::generateUniqueId();
    }

    protected static function isProfileIdUnique($identifier)
    {
        return User::where('identifier', $identifier)->count()==0;
    }

    public function following()
    {
        return $this->belongsToMany(self::class, "user_followers", "user_id", "follow_user_id");
    }

    public function followers()
    {
        return $this->belongsToMany(self::class, "user_followers", "follow_user_id", "user_id");
    }

    public function isFollowing(User $user)
    {
        return $this->following->contains(function ($following_user) use ($user) {
            return $following_user->id == $user->id;
        });
    }

    public function isFollower(User $user)
    {
        return $this->followers->contains(function ($following_user) use ($user) {
            return $following_user->id == $user->id;
        });
    }

    public function tweets()
    {
        return $this->hasMany(Tweet::class, "user_id", "id");
    }

    public function getRouteKeyName()
    {
        return 'identifier';
    }
}
