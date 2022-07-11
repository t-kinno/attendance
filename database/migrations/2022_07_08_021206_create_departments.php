<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartments extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('department_id'); //学科ID
            $table->string('department_name')->nullable(false); //学科名
            $table->integer('department_year')->nullable(false); //入学年度(西暦表記)
            $table->integer('department_period')->nullable(false); //在学期間
            $table->boolean('department_flag')->nullable(false)->default(0); //卒業フラグ
            $table->boolean('flag')->nullable(false)->default(0); //有効無効
            $table->dateTime('record_date'); //登録日
            $table->dateTime('update_date'); //更新日
            $table->boolean('del_flag')->default(0); //削除フラグ
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
        Schema::dropIfExists('departments');
    }
}
