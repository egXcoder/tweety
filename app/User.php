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
    protected $guarded = [];

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

    public function paginateUserTweets()
    {
        return $this->tweets()
                ->with(['impressions'])
                ->latest()
                ->paginate(Tweet::MAX_NUMBER_OF_TWEETS_IN_SCREEN);
    }

    public function paginateFollowingTweets()
    {
        $friends = $this->following->pluck('id');

        return $this->tweets()
                        ->orWhereIn('user_id', $friends)
                        ->with(['user','impressions'])
                        ->latest()
                        ->paginate(Tweet::MAX_NUMBER_OF_TWEETS_IN_SCREEN);
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

    public function getImageUrlAttribute($value)
    {
        if ($this->isUrl($value)) {
            return $value;
        }

        return asset("storage/$value");
    }

    public function getCoverUrlAttribute($value)
    {
        if ($this->isUrl($value)) {
            return $value;
        }

        return asset("storage/$value");
    }

    protected function isUrl($value)
    {
        return filter_var($value, FILTER_VALIDATE_URL);
    }

    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] =  bcrypt($value);
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
        return $this->following()->where('user_id', $this->id)->where('follow_user_id', $user->id)->exists();
    }

    public function isFollower(User $user)
    {
        return $this->followers()->where('user_id', $user->id)->where('follow_user_id', $this->id)->exists();
    }

    public function follow(User $user)
    {
        $this->following()->attach($user->id);
    }

    public function unfollow(User $user)
    {
        $this->following()->detach($user->id);
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
