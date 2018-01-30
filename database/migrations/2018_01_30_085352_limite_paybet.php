<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LimitePaybet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('limite_paybets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('lotto_id')->index();
            $table->integer('bet_num');
            $table->string('type');
            $table->decimal('limite_amount',16,2);
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
        Schema::dropIfExists('limite_paybets');
    }
}
