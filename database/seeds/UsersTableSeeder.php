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
<<<<<<< HEAD
        /*
        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        */

        factory(App\Models\User::class, 20)->create();
=======
        /* DB::table('users')->insert([
        'name' => str_random(10),
        'email' => str_random(10).'gmail.com',
        'password' => bcrypt('secret'),
        'remember_token' => str_random(10),
    ]); */

        factory(App\Models\User::class, 10)->create();

>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
    }
}
