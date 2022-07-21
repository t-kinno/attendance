<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('attend_check')->insert([
            [
                'check_day' => '2022/07/20',
                'student_id' => 1,
                'subject_id' => 7,
                'check_type' => 1,
                'check_period' => 3,
                'attend_id' => 1,
            ],
            [
                'check_day' => '2022/07/21',
                'student_id' => 3,
                'subject_id' => 4,
                'check_type' => 2,
                'check_period' => 2,
                'attend_id' => 2,
            ],
        ]);
    }
}
