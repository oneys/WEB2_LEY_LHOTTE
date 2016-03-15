<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
<<<<<<< HEAD
        $this->call(PostsTableSeeder::class);
=======
        $this->call(PostTableSeeder::class);
>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
    }
}
