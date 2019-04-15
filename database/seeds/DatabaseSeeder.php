<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //factory(App\Message::class)->create();
        //factory(App\Message::class,10)->create();
        
        factory(App\User::class, 10)->create()->each(function(App\User $user){
            factory(App\Message::class)->times(10)->create(['user_id'=>$user->id]);
        });
        
        //factory(App\Message::class)->times(10)->create();
    }
}
