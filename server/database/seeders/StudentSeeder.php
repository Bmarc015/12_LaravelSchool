<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Schoolclass;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('hu_HU');

        // Összes osztály – hogy érvényes schoolclassId legyen
        $schoolclasses = Schoolclass::pluck('id')->toArray();

        foreach (range(1, 50) as $i) {

            Student::create([
                'diakNev'       => $faker->name(),
                'schoolclassId' => $faker->randomElement($schoolclasses),

                'neme'          => $faker->randomElement([0, 1]), // 0 = nő, 1 = férfi (diagram alapján TINYINT)

                'iranyitoszam'  => $faker->postcode(),
                'lakHelyseg'    => $faker->city(),
                'lakCim'        => $faker->streetAddress(),

                'szulHelyseg'   => $faker->city(),
                'szulDatum'     => $faker->date('Y-m-d'),
                'igazolvanyszam' => strtoupper($faker->bothify('??######')),

                'atlag'         => $faker->randomFloat(2, 1, 5),
                'osztondij'     => $faker->randomFloat(0, 0, 50000),
            ]);
        }
    }
}
