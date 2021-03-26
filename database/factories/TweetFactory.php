<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Tweet;
use App\User;
use Faker\Generator as Faker;

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        "body"=>$faker->sentence,
        "user_id"=>factory(User::class)
    ];
},"create_tweet_and_user");

$factory->define(Tweet::class, function (Faker $faker) {
    return [
        "body"=>$faker->sentence,
        "user_id"=>User::inRandomOrder()->first()
    ];
},"create_tweet_with_existing_user");
