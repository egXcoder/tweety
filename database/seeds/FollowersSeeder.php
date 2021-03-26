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
            for($i=0;$i<4;$i++){
                try{
                    DB::table('user_followers')
                        ->insert([
                            "user_id"=>$user->id,
                            "follow_user_id"=> $users->random()->id,
                            "created_at"=>date('Y-m-d'),
                            "updated_at"=>date('Y-m-d'),
                        ]);
                }catch(\Exception $ex){
                    //most likely we try to add follow_user_id twice for same user_id
                    // and table will complain about uniquness
                    //well it doesn't matter so keep on seeding...
                }
            }
        }
    }
}
