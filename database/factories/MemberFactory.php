<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Member::class, function (Faker $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'username' => $faker->unique()->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'credit' => rand(10, 10000),
        'phone' => '012345678',
        'status' => true,
        'remember_token' => str_random(10),
        'level' => rand(1, 7)
    ];
});
