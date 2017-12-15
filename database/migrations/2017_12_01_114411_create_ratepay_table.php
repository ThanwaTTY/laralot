<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatepayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ratepays', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->integer('lot_id')->default('2');
            $table->integer('payout_1');
            $table->integer('com_1');
            $table->integer('payout_2');
            $table->integer('com_2');
            $table->integer('payout_3');
            $table->integer('com_3');
            $table->integer('payout_4');
            $table->integer('com_4');
            $table->integer('payout_5');
            $table->integer('com_5');
            $table->integer('payout_6');
            $table->integer('com_6');
            $table->integer('payout_7');
            $table->integer('com_7');
            $table->integer('payout_8');
            $table->integer('com_8');
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
        Schema::dropIfExists('ratepays');
    }
}
