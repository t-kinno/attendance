<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class HolidaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('holidays')->insert([
            [
                'holiday' => '2022/07/30',
                'holiday_cause' => '夏季休業',
            ],
            [
                'holiday' => '2022/08/21',
                'holiday_cause' => '夏季休業',
            ],
            [
                'holiday' => '2022/09/20',
                'holiday_cause' => 'ジョビFes代休日',
            ],
        ]);
    }
}
