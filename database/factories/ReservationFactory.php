<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reservation;
use Faker\Generator as Faker;

$factory->define(Reservation::class, function (Faker $faker) {
    return [
        'service_type_id' => $faker->numberBetween(1,3),
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'comment' => $faker->text,
        'date' => $faker->randomElement(['2021-02-20', '2021-02-21', '2021-02-22']),
        'time' => $faker->unique()->randomElement(['12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00'])
    ];
});
