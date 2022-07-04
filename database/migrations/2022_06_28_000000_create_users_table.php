<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('teacher_name');
            $table->string('email');
            $table->integer('normal');
            $table->string('password');
            $table->boolean('flag');
            $table->dateTime('record_date');
            $table->dateTime('update_date');
            $table->boolean('del_flag');

            $table->string('api_token', 80)->unique()->nullable()->default(null)->comment('guardが参照するapi_token');
            $table->boolean('manager_flag')->default(false)->comment('trueだとadmin権限を持つ');

            // timestampsは絶対必要
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
        Schema::dropIfExists('users');
    }
}
