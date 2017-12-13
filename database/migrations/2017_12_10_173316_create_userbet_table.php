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
            $table->integer('member_id')->index();
            $table->integer('lotto_id')->default(0);
            $table->integer('bet_num');
            $table->integer('cal_num')->default(0);
            $table->string('type');
            $table->decimal('amount',16,2);
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
