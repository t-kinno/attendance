<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('teacher_id');
            $table->string('teacher_name')->nullable(false);
            $table->string('email')->nullable(false);
            $table->integer('normal')->nullable(false);
            $table->string('password')->nullable(false);
            $table->boolean('flag')->nullable(false)->default(0);
            $table->boolean('del_flag')->nullable(false)->default(0);

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
        Schema::dropIfExists('teachers');
    }
}
