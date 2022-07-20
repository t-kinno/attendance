<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class TeachersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            [
                'teacher_name' => '細川',
                'email' => 'test1@test',
                'normal' => false,
                'password' => bcrypt('testadmin'),
                'manager_flag' => true,
            ],
            [
                'teacher_name' => '金野',
                'email' => 'test2@test',
                'normal' => true,
                'password' => bcrypt('testnormal'),
                'manager_flag' => false,
            ],
            [
                'teacher_name' => '鈴木',
                'email' => 'test3@test',
                'normal' => true,
                'password' => bcrypt('testnormal'),
                'manager_flag' => false,
            ],
            [
                'teacher_name' => '渡辺',
                'email' => 'test3@test',
                'normal' => false,
                'password' => bcrypt('testnormal'),
                'manager_flag' => false,
            ],
            [
                'teacher_name' => '高橋',
                'email' => 'test4@test',
                'normal' => false,
                'password' => bcrypt('testnormal'),
                'manager_flag' => false,
            ],
        ]);
    }
}
