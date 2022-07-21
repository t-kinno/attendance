<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('departments')->insert([
            [
                'department_name' => '総合システム工学',
                'department_year' => 2020,
                'department_period' => 3,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '情報システム',
                'department_year' => 2020,
                'department_period' => 2,
                'department_flag' => true,
                'flag' => true,
            ],
            [
                'department_name' => '高度情報工学',
                'department_year' => 2020,
                'department_period' => 4,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => 'ネットワーク',
                'department_year' => 2020,
                'department_period' => 2,
                'department_flag' => true,
                'flag' => true,
            ],
            [
                'department_name' => '総合システム工学',
                'department_year' => 2021,
                'department_period' => 3,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '情報システム',
                'department_year' => 2021,
                'department_period' => 2,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '高度情報工学',
                'department_year' => 2021,
                'department_period' => 4,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '総合システム工学',
                'department_year' => 2022,
                'department_period' => 3,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '情報システム',
                'department_year' => 2022,
                'department_period' => 2,
                'department_flag' => false,
                'flag' => false,
            ],
            [
                'department_name' => '高度情報工学',
                'department_year' => 2022,
                'department_period' => 4,
                'department_flag' => false,
                'flag' => false,
            ],
        ]);
    }
}
