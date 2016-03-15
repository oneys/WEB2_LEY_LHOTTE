<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'tel' => $faker->phoneNumber,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

$factory->define(App\Models\Post::class, function (Faker\Generator $faker) {
    return [
<<<<<<< HEAD
        'user_id' => $faker->numberBetween(1, 20) ,
        'title' => $faker->title,
        'description' => $faker->text,
=======
        'user_id' => $faker->numberBetween(1,10),
        'title' => $faker->text(30),
        'description' => $faker->text(200),
>>>>>>> 3771714b514393664141cb9d24afe4c26e64b6e4
    ];
});
