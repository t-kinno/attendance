<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePasswordReset extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('password_reset', function (Blueprint $table) {
            $table->increments('pw_id'); //パスワードID
            $table->string('email')->nullable(false); //メールアドレス
            $table->dateTime('pw_effective_date')->nullable(false); // 有効期限
            $table->string('pw_session_id')->nullable(false); // セッションID
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
        Schema::dropIfExists('password_reset');
    }
}
