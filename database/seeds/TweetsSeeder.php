<?php

use App\Tweet;
use Illuminate\Database\Seeder;

class TweetsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Tweet::class,"create_tweet_with_existing_user",200)
            ->create();
    }
}
