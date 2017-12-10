<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserbetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userbets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('userbet_id')->index();
            $table->integer('num');
            $table->integer('top');
            $table->integer('bottom');
            $table->integer('tod');
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
        Schema::dropIfExists('userbets');
    }
}
