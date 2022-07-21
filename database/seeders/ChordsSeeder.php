<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chords')->insert([
            [
                'department_id' => 1,
                'chord_year' => 1,
                'course_id' => 1,
            ],
            [
                'department_id' => 1,
                'chord_year' => 2,
                'course_id' => 1,
            ],
            [
                'department_id' => 1,
                'chord_year' => 3,
                'course_id' => 1,
            ],
            [
                'department_id' => 1,
                'chord_year' => 1,
                'course_id' => 2,
            ],
            [
                'department_id' => 1,
                'chord_year' => 2,
                'course_id' => 2,
            ],
            [
                'department_id' => 1,
                'chord_year' => 3,
                'course_id' => 2,
            ],
            [
                'department_id' => 2,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 2,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 3,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 3,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 3,
                'chord_year' => 3,
                'course_id' => 0,
            ],
            [
                'department_id' => 3,
                'chord_year' => 4,
                'course_id' => 0,
            ],
            [
                'department_id' => 4,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 4,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 5,
                'chord_year' => 1,
                'course_id' => 3,
            ],
            [
                'department_id' => 5,
                'chord_year' => 2,
                'course_id' => 3,
            ],
            [
                'department_id' => 5,
                'chord_year' => 3,
                'course_id' => 3,
            ],
            [
                'department_id' => 5,
                'chord_year' => 1,
                'course_id' => 4,
            ],
            [
                'department_id' => 5,
                'chord_year' => 2,
                'course_id' => 4,
            ],
            [
                'department_id' => 5,
                'chord_year' => 3,
                'course_id' => 4,
            ],
            [
                'department_id' => 6,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 6,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 7,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 7,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 7,
                'chord_year' => 3,
                'course_id' => 0,
            ],
            [
                'department_id' => 7,
                'chord_year' => 4,
                'course_id' => 0,
            ],
            [
                'department_id' => 8,
                'chord_year' => 1,
                'course_id' => 5,
            ],
            [
                'department_id' => 8,
                'chord_year' => 2,
                'course_id' => 5,
            ],
            [
                'department_id' => 8,
                'chord_year' => 3,
                'course_id' => 5,
            ],
            [
                'department_id' => 8,
                'chord_year' => 1,
                'course_id' => 6,
            ],
            [
                'department_id' => 8,
                'chord_year' => 2,
                'course_id' => 6,
            ],
            [
                'department_id' => 8,
                'chord_year' => 3,
                'course_id' => 6,
            ],
            [
                'department_id' => 9,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 9,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 10,
                'chord_year' => 1,
                'course_id' => 0,
            ],
            [
                'department_id' => 10,
                'chord_year' => 2,
                'course_id' => 0,
            ],
            [
                'department_id' => 10,
                'chord_year' => 3,
                'course_id' => 0,
            ],
            [
                'department_id' => 10,
                'chord_year' => 4,
                'course_id' => 0,
            ],
        ]);
    }

}
