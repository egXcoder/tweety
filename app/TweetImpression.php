<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TweetImpression extends Model
{
    public function tweet(){
        return $this->belongsTo(Tweet::class,"tweet_id");
    }

    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
