<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('users', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('level');
        //     $table->decimal('credit');
        //     $table->string('username');
        //     $table->string('password');
        //     $table->string('name');
        //     $table->string('tel');
        //     $table->string('status');
        //     $table->decimal('win_lose_total');
        //     $table->dateTime('login_new');
        //     $table->string('ip');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('users');
    }
}
