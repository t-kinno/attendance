<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudents extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('student_id'); //生徒ID
            $table->integer('student_number')->nullable(false); //学籍番号
            $table->string('student_name')->nullable(false); //生徒名
            $table->string('student_ruby')->nullable(false); //ふりがな
            $table->integer('student_gender')->nullable(false); //性別
            $table->integer('department_id')->nullable(false); //学科ID
            $table->integer('course_id'); //コースID
            $table->string('student_scholarship'); //奨学金判定
            $table->string('student_universal'); //大学編入希望の有無
            $table->string('overview'); //備考欄
            $table->boolean('flag')->nullable(false)->default(0); //有効無効
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
        Schema::dropIfExists('students');
    }
}
