<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class CoursesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // コースのダミーデータを2つ登録
        DB::table('courses')->insert([
            [
                'course_name' => 'Web専攻',
                'department_id' => 1,
                'del_flag' => false,
            ],
            [
                'course_name' => 'Unity専攻',
                'department_id' => 1,
                'del_flag' => false,
            ],
        ]);
    }
}
