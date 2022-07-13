<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class StudentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // 学科のダミーデータを3つ登録
        DB::table('students')->insert([
            [
                'student_number' => 4223101,
                'student_name' => '山田太郎',
                'student_ruby' => 'やまだたろう',
                'student_gender' => 0,
                'department_id' => 1,
                'course_id' => 1,
                'student_scholarship' => NULL,
                'student_universal' => NULL,
                'overview' => NULL,
                'flag' => false,
                'del_flag' => false,
            ],
            [
                'student_number' => 4221101,
                'student_name' => '鈴木花',
                'student_ruby' => 'すずきはな',
                'student_gender' => 1,
                'department_id' => 2,
                'course_id' => 0,
                'student_scholarship' => NULL,
                'student_universal' => NULL,
                'overview' => NULL,
                'flag' => false,
                'del_flag' => false,
            ],
            [
                'student_number' => 4224101,
                'student_name' => '佐藤二郎',
                'student_ruby' => 'さとうじろう',
                'student_gender' => 0,
                'department_id' => 3,
                'course_id' => 0,
                'student_scholarship' => NULL,
                'student_universal' => NULL,
                'overview' => NULL,
                'flag' => false,
                'del_flag' => false,
            ],
        ]);
    }
}
