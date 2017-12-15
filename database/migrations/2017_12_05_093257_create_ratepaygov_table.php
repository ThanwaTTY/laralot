<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatepaygovTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratepaygovs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->integer('lotgov_id')->default('1');
            $table->integer('payoutg_1');
            $table->integer('comg_1');
            $table->integer('payoutg_2');
            $table->integer('comg_2');
            $table->integer('payoutg_3');
            $table->integer('comg_3');
            $table->integer('payoutg_4');
            $table->integer('comg_4');
            $table->integer('payoutg_5');
            $table->integer('comg_5');
            $table->integer('payoutg_6');
            $table->integer('comg_6');
            $table->integer('payoutg_7');
            $table->integer('comg_7');
            $table->integer('payoutg_8');
            $table->integer('comg_8');
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
        Schema::dropIfExists('ratepaygovs');
    }
}
