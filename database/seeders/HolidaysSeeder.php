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
                'holiday' => '2020/05/03',
                'holiday_cause' => '建国記念日',
                'del_flag' => false,
            ],
            [
                'holiday' => '2020/07/30',
                'holiday_cause' => '夏季休業',
                'del_flag' => false,
            ],
            [
                'holiday' => '2020/06/13',
                'holiday_cause' => '学校公開日',
                'del_flag' => true,
            ],
        ]);
    }
}
