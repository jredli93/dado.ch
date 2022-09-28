<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ServiceGroup;
use Faker\Generator as Faker;

$factory->define(ServiceGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->randomElement(['tattoo', 'laser']),
    ];
});
