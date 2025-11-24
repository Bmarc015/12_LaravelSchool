<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'role' => $this->faker->randomElement([0,1,2]), // pl. admin/teacher/student
            'email_verified_at' => now(),
            'password' => bcrypt('password'), 
            'remember_token' => Str::random(10),
        ];
    }
}
