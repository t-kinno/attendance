<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAttend extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attend', function (Blueprint $table) {
            $table->increments('attend_id'); //判定ID
            $table->date('attend_day')->nullable(false); //日にち
            $table->integer('student_id')->nullable(false); // 生徒ID
            $table->integer('chord_id')->nullable(false); // 学年コードID
            $table->integer('attend_type')->default(0); // 欠席種別
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
        Schema::dropIfExists('attend');
    }
}
