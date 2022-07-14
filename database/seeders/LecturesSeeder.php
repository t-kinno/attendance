<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LecturesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lectures')->insert([
            [
                'subject_id' => 1,
                'student_id' => 1,
            ],
            [
                'subject_id' => 1,
                'student_id' => 2,
            ],
            [
                'subject_id' => 2,
                'student_id' => 2,
            ],
            [
                'subject_id' => 2,
                'student_id' => 3,
            ],
            [
                'subject_id' => 3,
                'student_id' => 1,
            ],
            [
                'subject_id' => 3,
                'student_id' => 2,
            ],
            [
                'subject_id' => 3,
                'student_id' => 3,
            ],
        ]);
    }
}
