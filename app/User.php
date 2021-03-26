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

    public function following_me_users(){
        return $this->belongsToMany(self::class,"user_followers","id","user_id");
    }

    public function i_follow_users(){
        return $this->belongsToMany(self::class,"user_followers","id","follow_user_id");
    }

    public function tweets(){
        return $this->hasMany(Tweet::class,"user_id","id");
    }
}
