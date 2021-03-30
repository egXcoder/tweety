<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetImpression extends Model
{
    public const CONSTANTS = [
        'like'=>[
            'color'=>'#1da1f2',
            'icon'=>'far fa-thumbs-up'
        ],
        'dislike'=>[
            'color'=>'#ef3939',
            'icon'=> 'far fa-thumbs-down'
        ],
        'love'=>[
            'color'=>'#ef3939',
            'icon'=> 'far fa-heart'
        ],
        'laugh'=>[
            'color'=>'#ffc107',
            'icon'=> 'far fa-laugh-beam'
        ],
        'cry'=>[
            'color'=>'#ffc107',
            'icon'=> 'far fa-sad-tear'
        ]
    ];

    protected $guarded = [];

    public function tweet()
    {
        return $this->belongsTo(Tweet::class, "tweet_id");
    }

    public function user()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public static function validateImpressionKeyOrThrowException($impression_key){
        if(!static::isValidImpressionKey($impression_key)){
            throw new \Exception("Impression key used is not valid");
        }
    }

    public static function isValidImpressionKey($impression_key){
        foreach (self::CONSTANTS as $key => $value) {
            if($key == $impression_key){
                return true;
            }
        }
        return false;
    }
}
