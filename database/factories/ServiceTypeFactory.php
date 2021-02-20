<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceType;
use Faker\Generator as Faker;

$factory->define(ServiceType::class, function (Faker $faker) {
    return [
        'service_name' => $faker->unique()->randomElement(['piercing', 'tattoo', 'laser'])
    ];
});
