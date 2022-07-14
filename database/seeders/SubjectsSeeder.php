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
                'subject_name' => 'テクノロジ',
                'rulesubject_id' => 1,
                'chord_id' => 1,
                'teacher_id' => 1,
                'subject_semester' => 0,
                'del_flag' => false,
            ],
            [
                'subject_name' => 'Office入門',
                'rulesubject_id' => 2,
                'chord_id' => 4,
                'teacher_id' => 2,
                'subject_semester' => 1,
                'del_flag' => false,
            ],
            [
                'subject_name' => 'Ｐｙｔｈｏｎ言語',
                'rulesubject_id' => 3,
                'chord_id' => 6,
                'teacher_id' => 1,
                'subject_semester' => 0,
                'del_flag' => false,
            ],
        ]);
    }
}
