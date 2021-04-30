<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceType;
use Faker\Generator as Faker;

$factory->define(ServiceType::class, function (Faker $faker) {
    return [
        'service_name' => $faker->randomElement(['test 1', 'test2 ' ,'test3', 'test4']),
        'price' => $faker->numberBetween(20, 300),
        'duration' => $faker->numberBetween(20, 60),
        'service_group_id' => $faker->numberBetween(1,3)
    ];
});
