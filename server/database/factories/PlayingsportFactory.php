<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Sport;

class PlayingSportFactory extends Factory
{
    public function definition(): array
    {
        return [
            'studentId' => Student::inRandomOrder()->value('id'),
            'sportId'   => Sport::inRandomOrder()->value('id'),
        ];
    }
}
