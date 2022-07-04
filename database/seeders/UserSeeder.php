<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //userのダミーデータを2つ作成
        DB::table('users')->insert([
            [
                //admin権限を持つユーザー
                'teacher_name' => 'test1',
                'email' => 'test1@test',
                'normal' => false,
                'password' => bcrypt('testadmin'),
                'api_token' => Str::random(60),
                'flag' => false,
                'record_date' => '2022-06-29 12:18:11',
                'update_date' => '2022-06-29 12:18:11',
                'del_flag' => false,
                'manager_flag' => true,
            ],
            [
                //admin権限を持たないユーザー
                'teacher_name' => 'test2',
                'email' => 'test2@test',
                'normal' => true,
                'password' => bcrypt('testnormal'),
                'api_token' => Str::random(60),
                'flag' => false,
                'record_date' => '2022-06-29 12:18:11',
                'update_date' => '2022-06-29 12:18:11',
                'del_flag' => false,
                'manager_flag' => false,
            ],
        ]);
    }
}
