<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SportFactory extends Factory
{
    public function definition(): array
    {
        return [
            'sportName' => $this->faker->randomElement([
                'Foci', 'Kosárlabda', 'Röplabda', 'Úszás', 'Kézilabda', 'Asztalitenisz'
            ]),
        ];
    }
}
