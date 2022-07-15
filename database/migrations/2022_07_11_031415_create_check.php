<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCheck extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attend_check', function (Blueprint $table) {
            $table->increments('check_id'); //出席簿ID
            $table->date('check_day')->nullable(false); //日にち
            $table->integer('student_id')->nullable(false); // 生徒ID
            $table->integer('subject_id')->nullable(false); // 科目ID
            $table->integer('check_type')->default(0); // 欠席種別
            $table->integer('check_period')->nullable(false); // 限目
            $table->integer('attend_id')->nullable(false); // 限目
            $table->boolean('del_flag')->nullable(false)->default(0); //削除フラグ
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
        Schema::dropIfExists('attend_check');
    }
}
