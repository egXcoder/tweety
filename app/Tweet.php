<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    public const MAX_NUMBER_OF_TWEETS_IN_SCREEN = 20;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, "user_id", "id");
    }

    public function impressions()
    {
        return $this->hasMany(TweetImpression::class, "tweet_id");
    }

    public function filterImpressions($impression_key)
    {
        TweetImpression::validateKeyOrThrowException($impression_key);

        return $this->impressions->filter(function ($impressionRecord) use ($impression_key) {
            return ($impressionRecord->impression == $impression_key);
        });
    }

    public function getImpressionRecordForLoggedUser($impression_key)
    {
        return $this->filterImpressions($impression_key)
            ->where('user_id', auth()->user()->id)
            ->first();
    }

    public function setImpression(User $user, $impression_key)
    {
        TweetImpression::validateKeyOrThrowException($impression_key);

        $this->impressions()
                ->updateOrCreate(['user_id'=>$user->id], ['impression'=>$impression_key]);
    }
}
