<?php

namespace App;

use App\Enum\ImpressionsEnum;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Tweet extends Model
{
    public const MAX_NUMBER_OF_TWEETS_IN_SCREEN = 20;

    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class,"user_id","id");
    }

    public function impressions(){
        return $this->hasMany(TweetImpression::class,"tweet_id");
    }

    public function filterImpressions(ImpressionsEnum $impression){
        return $this->impressions->filter(function($impressionRecord)use($impression){
            return ($impressionRecord->impression == $impression);
        });
    }

    public function isLoggedUserImpressed(ImpressionsEnum $impression){
        return (bool) $this->filterImpressions($impression)
            ->where('user_id',auth()->user()->id)
            ->first();
    }

    public function setImpression(User $user,ImpressionsEnum $impression){
        $this->impressions()
        ->updateOrCreate([
            'user_id'=>$user->id
        ],[
            'impression'=>$impression
        ]);
    }
}
