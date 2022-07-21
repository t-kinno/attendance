<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //seederの呼び出しを行う。
        $this->call([
            UsersSeeder::class,
            DepartmentsTableSeeder::class,
            CoursesSeeder::class,
            ChordsSeeder::class,
            StudentsSeeder::class,
            RulesubjectsSeeder::class,
            TeachersSeeder::class,
            SubjectsSeeder::class,
            LecturesSeeder::class,
            TimetablesSeeder::class,
            HolidaysSeeder::class,
            CheckSeeder::class,
            AttendSeeder::class,
            ChangeDepartmentsSeeder::class
        ]);
    }
}
