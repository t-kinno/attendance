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
                'attend_day' => '2022/07/20',
                'student_id' => 1,
                'chord_id' => 3,
                'attend_type' => 4,
            ],
            [
                'attend_day' => '2022/07/21',
                'student_id' => 3,
                'chord_id' => 6,
                'attend_type' => 0,
            ],
        ]);
    }
}
