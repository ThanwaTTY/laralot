<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Limite extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limites', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->integer('lotto_id')->index();
            $table->integer('top3');
            $table->integer('bottom3');
            $table->integer('tod3');
            $table->integer('top2');
            $table->integer('bottom2');
            $table->integer('tod2');
            $table->integer('top1');
            $table->integer('bottom1');
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
        Schema::dropIfExists('limites');
    }
}
