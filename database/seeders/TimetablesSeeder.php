<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class TimetablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('timetables')->insert([
            [
                'timetable_day' => '2022/07/14',
                'subject_id_period_1' => 1,
                'subject_id_period_2' => 1,
                'subject_id_period_3' => 2,
                'chord_id' => 1
            ],
            [
                'timetable_day' => '2022/07/15',
                'subject_id_period_1' => 2,
                'subject_id_period_2' => 1,
                'subject_id_period_3' => 3,
                'chord_id' => 4
            ],
        ]);
    }
}
