<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
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

    public function getFollowingTweets(){
        return Tweet::whereIn('user_id',array_merge($this->following->pluck('id')->toArray(),[auth()->id()]))
                        ->with(['user','impressions'])
                        ->latest()
                        ->get();
    }

    public function following(){
        return $this->belongsToMany(self::class,"user_followers","user_id","follow_user_id");
    }

    public function followers(){
        return $this->belongsToMany(self::class,"user_followers","follow_user_id","user_id");
    }

    public function tweets(){
        return $this->hasMany(Tweet::class,"user_id","id");
    }
}
