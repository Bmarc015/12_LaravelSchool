<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SchoolclassFactory extends Factory
{
    public function definition(): array
    {
        return [
            'className' => $this->faker->randomElement(['9A', '9B', '10A', '10B', '11A', '12A']),
        ];
    }
}
