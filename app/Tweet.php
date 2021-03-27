<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function impressions(){
        return $this->hasMany(TweetImpression::class,"tweet_id");
    }

    public function onlyImpressions($impression){
        return $this->impressions->filter(function($impressionRecord)use($impression){
            return ($impressionRecord->impression == $impression);
        });
    }
}
