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
                'rulesubject_name' => '基礎教養Ⅲ',
                'department_id' => 1,
                'chord_id' => 3,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 32,
            ],
            [
                'rulesubject_name' => '基礎教養Ⅲ',
                'department_id' => 1,
                'chord_id' => 6,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 32,
            ],
            [
                'rulesubject_name' => '開発実践',
                'department_id' => 1,
                'chord_id' => 3,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 114,
            ],
            [
                'rulesubject_name' => '開発実践',
                'department_id' => 1,
                'chord_id' => 6,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 114,
            ],
            [
                'rulesubject_name' => '工学システム開発Ⅱ',
                'department_id' => 1,
                'chord_id' => 3,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 320,
            ],
            [
                'rulesubject_name' => 'ゲームクリエイト実践Ⅱ',
                'department_id' => 1,
                'chord_id' => 6,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 320,
            ],
            [
                'rulesubject_name' => '業界研究',
                'department_id' => 1,
                'chord_id' => 3,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 320,
            ],
            [
                'rulesubject_name' => '業界研究',
                'department_id' => 1,
                'chord_id' => 6,
                'rulesubject_year' => 3,
                'rulesubject_class_count' => 320,
            ],
        ]);
    }
}
