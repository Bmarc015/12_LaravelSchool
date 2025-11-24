<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Student;
use App\Models\Sport;
use App\Models\PlayingSport;

class PlayingSportSeeder extends Seeder
{
    public function run(): void
    {
        $sports = Sport::pluck('id')->toArray();

        foreach (Student::all() as $student) {
            $randomSports = collect($sports)->random(rand(0,3));

            foreach ($randomSports as $sportId) {
                PlayingSport::create([
                    'studentId' => $student->id,
                    'sportId'   => $sportId,
                ]);
            }
        }
    }
}
