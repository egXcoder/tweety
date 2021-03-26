<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FollowersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        foreach($users as $user){
            DB::table('user_followers')
                ->insert([
                    "user_id"=>$user->id,
                    "follow_user_id"=> $users->random()->id,
                    "created_at"=>date('Y-m-d'),
                    "updated_at"=>date('Y-m-d'),
                ]);
        }
    }
}
