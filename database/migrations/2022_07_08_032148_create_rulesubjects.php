<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRulesubjects extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rulesubjects', function (Blueprint $table) {
            $table->increments('rulesubject_id'); //学則科目ID
            $table->string('rulesubject_name')->nullable(false); //学則科目名
            $table->integer('department_id')->nullable(false); //学科ID
            $table->integer('chord_id')->nullable(false); //学年コードID
            $table->integer('rulesubject_year')->nullable(false); //学年
            $table->integer('rulesubject_class_count')->nullable(false); //学則授業時間数
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
        Schema::dropIfExists('rulesubjects');
    }
}
