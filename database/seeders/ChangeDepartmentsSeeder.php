<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ChangeDepartmentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('change_departments')->insert([
            [
                'student_id' => 12,
                'department_before' => 8,
                'department_after' => 9,
                'course_before' => 0,
                'course_after' => 0,
                'chords_before' => 27,
                'chords_after' => 31,
                'change_department_date' => '2022/07/20',
            ],
        ]);
    }
}
