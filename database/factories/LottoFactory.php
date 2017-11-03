<?php

use Faker\Generator as Faker;

$factory->define(App\Lotto::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'priceTime' => $faker->dateTimeBetween($startDate = 'tomorrow', $endDate = '+2 weeks')
    ];
});
