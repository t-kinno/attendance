<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChangeDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('change_departments', function (Blueprint $table) {
            $table->increments('change_department_id'); // 転科履歴ID
            $table->integer('student_id')->nullable(false); // 生徒ID
            $table->integer('department_before')->nullable(false); // 転科前の学科ID
            $table->integer('department_after')->nullable(false); // 転科後の学科ID
            $table->integer('course_before')->nullable(false); // 転科前のコースID
            $table->integer('course_after')->nullable(false); // 転科後のコースID
            $table->integer('chords_before')->nullable(false); // 転科時の旧学年コード
            $table->integer('chords_after')->nullable(false); // 転科時の新学年コード
            $table->dateTime('change_department_date')->nullable(false); // 転科した日付
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
        Schema::dropIfExists('change_departments');
    }
}
