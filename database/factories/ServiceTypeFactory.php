<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ServiceTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'service_name' => $this->faker->randomElement(['Service Type 1', 'Service Type 2', 'Service Type 3', 'Service Type 4']),
            'price' => $this->faker->numberBetween(20, 300),
            'duration' => $this->faker->numberBetween(20, 60),
            'service_group_id' => $this->faker->numberBetween(1,2)
        ];
    }
}
