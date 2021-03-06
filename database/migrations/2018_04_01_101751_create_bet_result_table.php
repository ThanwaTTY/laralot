<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBetResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bet_results', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->integer('userbet_id')->index();
            $table->integer('ticket_id')->index();
            $table->integer('lotto_id')->index();
            $table->string('latepay');
            $table->datetime('date_time');
            $table->decimal('pay');
            $table->string('note');
            $table->integer('useradd');
            $table->text('useradddetail')->nullable();
            $table->string('bet_num');
            $table->string('cal_num')->default(0);
            $table->string('type');
            for($i=1;$i<=7;$i++)
            {
                $table->decimal('amount_' . $i,16,2)->default('0');
                $table->decimal('keep_' . $i,16,2)->default('0');
                $table->decimal('com_' . $i,16,2)->default('0');
                $table->decimal('pay_' . $i,16,2)->default('0');
            }


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
        Schema::dropIfExists('bet_results');
    }
}
