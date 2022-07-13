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
                'del_flag' => false,
            ],
            [
                'department_id' => 1,
                'chord_year' => 2,
                'course_id' => 1,
                'del_flag' => false,
            ],
            [
                'department_id' => 1,
                'chord_year' => 3,
                'course_id' => 1,
                'del_flag' => false,
            ],
            [
                'department_id' => 2,
                'chord_year' => 1,
                'course_id' => 0,
                'del_flag' => false,
            ],
            [
                'department_id' => 2,
                'chord_year' => 2,
                'course_id' => 0,
                'del_flag' => false,
            ],
            [
                'department_id' => 3,
                'chord_year' => 1,
                'course_id' => 0,
                'del_flag' => false,
            ],
            [
                'department_id' => 3,
                'chord_year' => 2,
                'course_id' => 0,
                'del_flag' => false,
            ],
            [
                'department_id' => 3,
                'chord_year' => 3,
                'course_id' => 0,
                'del_flag' => false,
            ],
            [
                'department_id' => 3,
                'chord_year' => 4,
                'course_id' => 0,
                'del_flag' => false,
            ],
        ]);
    }

}
