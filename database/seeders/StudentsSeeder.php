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
                'student_number' => 4203103,
                'student_name' => '佐藤哲也',
                'student_ruby' => 'さとうてつや',
                'student_gender' => 0,
                'department_id' => 1,
                'course_id' => 1,
                'flag' => false,
            ],
            [
                'student_number' => 4203114,
                'student_name' => '林良太',
                'student_ruby' => 'はやしりょうた',
                'student_gender' => 0,
                'department_id' => 1,
                'course_id' => 2,
                'flag' => false,
            ],
            [
                'student_number' => 4203113,
                'student_name' => '橋本志穂',
                'student_ruby' => 'はしもとしほ',
                'student_gender' => 1,
                'department_id' => 1,
                'course_id' => 2,
                'flag' => false,
            ],
            [
                'student_number' => 4201101,
                'student_name' => '大沼徹',
                'student_ruby' => 'おおぬまとおる',
                'student_gender' => 1,
                'department_id' => 2,
                'course_id' => 0,
                'flag' => true,
            ],
            [
                'student_number' => 4204101,
                'student_name' => '三上恵',
                'student_ruby' => 'みかみめぐみ',
                'student_gender' => 1,
                'department_id' => 3,
                'course_id' => 0,
                'flag' => false,
            ],
            [
                'student_number' => 4202101,
                'student_name' => '岩田翔太',
                'student_ruby' => 'いわたしょうた',
                'student_gender' => 1,
                'department_id' => 4,
                'course_id' => 0,
                'flag' => true,
            ],
            [
                'student_number' => 4213108,
                'student_name' => '永井貴大',
                'student_ruby' => 'ながいたかひろ',
                'student_gender' => 0,
                'department_id' => 5,
                'course_id' => 3,
                'flag' => false,
            ],
            [
                'student_number' => 4213111,
                'student_name' => '渡邊真希',
                'student_ruby' => 'わたなべまき',
                'student_gender' => 1,
                'department_id' => 5,
                'course_id' => 4,
                'flag' => false,
            ],
            [
                'student_number' => 4211101,
                'student_name' => '小川義昭',
                'student_ruby' => 'おがわよしあき',
                'student_gender' => 0,
                'department_id' => 6,
                'course_id' => 0,
                'flag' => false,
            ],
            [
                'student_number' => 4214101,
                'student_name' => '岡本悠平',
                'student_ruby' => 'おかもとゆうへい',
                'student_gender' => 0,
                'department_id' => 7,
                'course_id' => 0,
                'flag' => false,
            ],
            [
                'student_number' => 4223103,
                'student_name' => '北正人',
                'student_ruby' => 'きたまさと',
                'student_gender' => 0,
                'department_id' => 8,
                'course_id' => 0,
                'flag' => false,
            ],
            [
                'student_number' => 4221119,
                'student_name' => '森亜耶',
                'student_ruby' => 'もりあや',
                'student_gender' => 1,
                'department_id' => 9,
                'course_id' => 0,
                'flag' => false,
            ],
            [
                'student_number' => 4224114,
                'student_name' => '佐藤友彰',
                'student_ruby' => 'さとうともあき',
                'student_gender' => 0,
                'department_id' => 10,
                'course_id' => 0,
                'flag' => false,
            ],
        ]);
    }
}
