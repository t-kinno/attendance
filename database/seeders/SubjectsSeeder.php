<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            [
                'subject_name' => 'office',
                'rulesubject_id' => 1,
                'chord_id' => 3,
                'teacher_id' => 4,
                'subject_semester' => 0
            ],
            [
                'subject_name' => 'office',
                'rulesubject_id' => 2,
                'chord_id' => 6,
                'teacher_id' => 4,
                'subject_semester' => 0
            ],
            [
                'subject_name' => 'WebプログラミングⅢ',
                'rulesubject_id' => 3,
                'chord_id' => 3,
                'teacher_id' => 2,
                'subject_semester' => 0
            ],
            [
                'subject_name' => 'ゲーム制作Ⅰ',
                'rulesubject_id' => 4,
                'chord_id' => 6,
                'teacher_id' => 5,
                'subject_semester' => 0
            ],
            [
                'subject_name' => '卒業研究ー開発',
                'rulesubject_id' => 5,
                'chord_id' => 3,
                'teacher_id' => 1,
                'subject_semester' => 1
            ],
            [
                'subject_name' => '卒業研究ー開発',
                'rulesubject_id' => 6,
                'chord_id' => 6,
                'teacher_id' => 1,
                'subject_semester' => 1
            ],
            [
                'subject_name' => '卒業研究ー企画',
                'rulesubject_id' => 7,
                'chord_id' => 3,
                'teacher_id' => 1,
                'subject_semester' => 0
            ],
            [
                'subject_name' => '卒業研究ー企画',
                'rulesubject_id' => 8,
                'chord_id' => 6,
                'teacher_id' => 1,
                'subject_semester' => 0
            ],
            [
                'subject_name' => '卒業研究ー報告',
                'rulesubject_id' => 1,
                'chord_id' => 3,
                'teacher_id' => 1,
                'subject_semester' => 1
            ],
            [
                'subject_name' => '卒業研究ー報告',
                'rulesubject_id' => 1,
                'chord_id' => 6,
                'teacher_id' => 1,
                'subject_semester' => 1
            ],
            [
                'subject_name' => '就職活動',
                'rulesubject_id' => 7,
                'chord_id' => 3,
                'teacher_id' => 1,
                'subject_semester' => 0
            ],
            [
                'subject_name' => '就職活動',
                'rulesubject_id' => 7,
                'chord_id' => 6,
                'teacher_id' => 1,
                'subject_semester' => 0
            ],
        ]);
    }
}
