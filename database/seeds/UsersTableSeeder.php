<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class)->create([
            "name"=>"ahmed",
            "email"=>"ahmed@email.com",
            "password"=>'123456',
            "image_url"=>"https://i.pravatar.cc/600?u=ahmed@email.com"
        ]);

        factory(App\User::class,50)->create();
    }
}
