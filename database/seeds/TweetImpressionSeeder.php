<?php

use App\Tweet;
use App\TweetImpression;
use App\User;
use Illuminate\Database\Seeder;

class TweetImpressionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::take(10)->get();
        $tweets = Tweet::all();
        foreach($users as $user){
            foreach($tweets as $tweet){
                factory(TweetImpression::class)->create([
                    "user_id"=>$user->id,
                    "tweet_id"=>$tweet->id,
                ]);
            }
        }
    }
}
