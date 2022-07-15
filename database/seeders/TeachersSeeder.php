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
                'api_token' => Str::random(60),
                'flag' => false,
                'del_flag' => false,
                'manager_flag' => true,
            ],
            [
                'teacher_name' => '金野',
                'email' => 'test2@test',
                'normal' => true,
                'password' => bcrypt('testnormal'),
                'api_token' => Str::random(60),
                'flag' => false,
                'del_flag' => false,
                'manager_flag' => false,
            ],
        ]);
    }
}
