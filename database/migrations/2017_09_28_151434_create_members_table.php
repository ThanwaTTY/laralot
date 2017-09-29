<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->tinyInteger('level')->index();
            $table->string('username', 64)->index();
            $table->string('password', 100);
            $table->decimal('credit', 20, 7);
            $table->string('name');
            $table->string('phone');
            $table->string('status')->default(0);
            $table->string('latest_use')->default('');
            $table->string('latest_login')->default('');
            $table->string('latest_ip')->default('');
            $table->string('online')->default(0);
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
        Schema::dropIfExists('members');
    }
}
