<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatePayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_pay', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned()->index();
            $table->string('lotgov');
            $table->string('lot');
            $table->string('threelotgov');
            $table->string('threelot');
            $table->integer('lotgovpay_threetop');
            $table->integer('lotgovpay_threebootom');
            $table->integer('lotgovpay_threetod');
            $table->integer('lotgovpay_twotop');
            $table->integer('lotgovpay_twobootom');
            $table->integer('lotgovpay_twotod');
            $table->integer('lotgovpay_runtop');
            $table->integer('lotgovpay_runbootom');
            $table->integer('lotgovcom_threetop');
            $table->integer('lotgovcom_threebootom');
            $table->integer('lotgovcom_threetod');
            $table->integer('lotgovcom_twotop');
            $table->integer('lotgovcom_twobootom');
            $table->integer('lotgovcom_twotod');
            $table->integer('lotgovcom_runtop');
            $table->integer('lotgovcom_runbootom');
            $table->integer('lotgovcom_runtod');
            $table->integer('lotpay_threetop');
            $table->integer('lotpay_threebootom');
            $table->integer('lotpay_threetod');
            $table->integer('lotpay_twotop');
            $table->integer('lotpay_twobootom');
            $table->integer('lotpay_twotod');
            $table->integer('lotpay_runtop');
            $table->integer('lotpay_runbootom');
            $table->integer('lotcom_threetop');
            $table->integer('lotcom_threebootom');
            $table->integer('lotcom_threetod');
            $table->integer('lotcom_twotop');
            $table->integer('lotcom_twobootom');
            $table->integer('lotcom_twotod');
            $table->integer('lotcom_runtop');
            $table->integer('lotcom_runbootom');
            $table->integer('lotcom_runtod');
            $table->rememberToken();
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
        Schema::dropIfExists('rate_pay');
    }
}
