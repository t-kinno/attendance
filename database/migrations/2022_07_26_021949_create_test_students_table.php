<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTestStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('test_students', function (Blueprint $table) {
            $table->increments('student_id'); //生徒ID
            $table->integer('student_number')->nullable(false); //学籍番号
            $table->string('student_name')->nullable(false); //生徒名
            $table->string('student_ruby')->nullable(false); //ふりがな
            $table->integer('student_gender')->nullable(false); //性別
            $table->integer('department_id')->nullable(); //学科ID
            $table->string('overview')->nullable(); //備考欄
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
        Schema::dropIfExists('test_students');
    }
}
