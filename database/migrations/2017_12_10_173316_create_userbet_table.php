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
            $table->integer('ticket_id')->index();
            $table->string('latepay');
            $table->datetime('date_time');
            $table->decimal('pay');
            $table->decimal('com_mem',16,2);
            $table->decimal('agent_amount',16,2);
            $table->decimal('agent_keep',16,2);
            $table->decimal('agent_com',16,2);
            $table->decimal('company_amount',16,2);
            $table->decimal('company_com',16,2);
            $table->decimal('company_keep',16,2);
            $table->string('note');
            $table->integer('useradd');
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
