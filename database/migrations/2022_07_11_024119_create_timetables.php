<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
            $table->increments('timetable_id'); //時間割ID
            $table->integer('timetable_day')->nullable(false); //日にち
            $table->integer('subject_id_period_1'); // 1限目（科目ID）
            $table->integer('subject_id_period_2'); // 2限目（科目ID）
            $table->integer('subject_id_period_3'); // 3限目（科目ID）
            $table->integer('subject_id_period_4'); // 4限目（科目ID）
            $table->integer('chord_id')->nullable(false); //学年コードID
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('timetables');
    }
}
