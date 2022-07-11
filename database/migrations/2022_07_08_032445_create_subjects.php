<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjects', function (Blueprint $table) {
            $table->increments('subject_id'); //科目ID
            $table->string('subject_name')->nullable(false); //科目名
            $table->integer('rulesubject_id')->nullable(false); //学則科目ID
            $table->integer('chord_id')->nullable(false); //学年コードID
            $table->integer('subject_class_count')->default(0); //時間数
            $table->integer('subject_teacher')->default(null); //担当講師ID
            $table->boolean('subject_semester')->default(0); //前期後期区分
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
        Schema::dropIfExists('subjects');
    }
}
