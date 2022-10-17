<?php

namespace Database\Factories;
 
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
 
class ReservationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_type_id' => $this->faker->numberBetween(1,3),
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'comment' => $this->faker->text,
            'date' => $this->faker->randomElement(['2021-02-20', '2021-02-21', '2021-02-22']),
            'time' => $this->faker->unique()->randomElement(['12:00:00', '13:00:00', '14:00:00', '15:00:00', '16:00:00'])
        ];
    }
}