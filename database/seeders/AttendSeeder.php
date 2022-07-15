<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AttendSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attend')->insert([
            [
                'check_day' => '2020/05/20',
                'student_id' => 1,
                'chord_id' => 1,
                'attend_type' => 1,
                'check_period' => 2,
                'attend_id' => 1,
            ],
            [
                'check_day' => '2020/05/20',
                'student_id' => 1,
                'subject_id' => 2,
                'check_type' => 1,
                'check_period' => 3,
                'attend_id' => 2,
            ],
            [
                'check_day' => '2020/06/22',
                'student_id' => 2,
                'subject_id' => 3,
                'check_type' => 2,
                'check_period' => 3,
                'attend_id' => 3,
            ],
            [
                'check_day' => '2020/06/22',
                'student_id' => 2,
                'subject_id' => 3,
                'check_type' => 2,
                'check_period' => 2,
                'attend_id' => 4,
                'del_flag' => true,
            ],
        ]);
    }
}
