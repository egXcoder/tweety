<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use App\TweetImpression;
use App\User;
use Faker\Generator as Faker;

$factory->define(TweetImpression::class, function (Faker $faker) {
    $impressios = ['like','dislike','love','laugh','cry'];
    return [
        'impression'=>$impressios[array_rand($impressios)],
        'user_id'=>1,
        'tweet_id'=>1,
    ];
});
