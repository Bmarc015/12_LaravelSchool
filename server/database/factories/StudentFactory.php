<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Schoolclass;

class StudentFactory extends Factory
{
    public function definition(): array
    {
        return [

            'studentName'   => $this->faker->name(),

            'schoolclassId' => Schoolclass::inRandomOrder()->value('id') ?? 1,

            'gender'        => $this->faker->randomElement([0, 1]),

            'postalcode'    => $this->faker->postcode(),
            'city'          => $this->faker->city(),
            'address'       => $this->faker->streetAddress(),

            'birthplace'    => $this->faker->city(),
            'birthdate'     => $this->faker->date('Y-m-d'),

            'idNumber'      => strtoupper($this->faker->bothify('??######')),

            'gpa'           => $this->faker->randomFloat(1, 1, 5),  
            // gpa DECIMAL(2,1)

            'scholarship'   => $this->faker->randomFloat(0, 0, 50000),
            // DECIMAL(10) -> whole numbers allowed
        ];
    }
}
