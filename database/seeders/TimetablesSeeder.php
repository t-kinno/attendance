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
                'timetable_day' => '2022/07/20',
                'subject_id_period_1' => 11,
                'subject_id_period_2' => 3,
                'subject_id_period_3' => 7,
                'chord_id' => 3
            ],
            [
                'timetable_day' => '2022/07/21',
                'subject_id_period_1' => 1,
                'subject_id_period_2' => 3,
                'subject_id_period_3' => 7,
                'chord_id' => 3
            ],
            [
                'timetable_day' => '2022/09/27',
                'subject_id_period_1' => 5,
                'subject_id_period_2' => 5,
                'subject_id_period_3' => 0,
                'chord_id' => 3
            ],
            [
                'timetable_day' => '2022/07/20',
                'subject_id_period_1' => 12,
                'subject_id_period_2' => 4,
                'subject_id_period_3' => 8,
                'chord_id' => 6
            ],
            [
                'timetable_day' => '2022/07/21',
                'subject_id_period_1' => 2,
                'subject_id_period_2' => 4,
                'subject_id_period_3' => 8,
                'chord_id' => 6
            ],
            [
                'timetable_day' => '2022/09/27',
                'subject_id_period_1' => 6,
                'subject_id_period_2' => 6,
                'subject_id_period_3' => 0,
                'chord_id' => 6
            ],
        ]);
    }
}
