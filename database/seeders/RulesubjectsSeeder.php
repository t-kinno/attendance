<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class RulesubjectsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rulesubjects')->insert([
            [
                'rulesubject_name' => '情報システム概論',
                'department_id' => 1,
                'chord_id' => 3,
                'department_flag' => false,
                'flag' => false,
                'del_flag' => false,
            ],
            [
                'rulesubject_name' => '情報システム演習',
                'department_id' => 2,
                'chord_id' => 4,
                'department_flag' => false,
                'flag' => false,
                'del_flag' => false,
            ],
            [
                'rulesubject_name' => 'プログラム言語',
                'department_id' => 3,
                'chord_id' => 4,
                'department_flag' => false,
                'flag' => false,
                'del_flag' => false,
            ],
        ]);
    }
}
