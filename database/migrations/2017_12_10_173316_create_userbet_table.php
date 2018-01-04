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
            $table->string('note');
            $table->integer('useradd');
            $table->text('useradddetail')->nullable();
            $table->integer('bet_num');
            $table->integer('cal_num')->default(0);
            $table->string('type');
            $table->decimal('amount_1',16,2)->default('0');
            $table->decimal('keep_1',16,2)->default('0');
            $table->decimal('com_1',16,2)->default('0');
            $table->decimal('amount_2',16,2)->default('0');
            $table->decimal('keep_2',16,2)->default('0');
            $table->decimal('com_2',16,2)->default('0');
            $table->decimal('amount_3',16,2)->default('0');
            $table->decimal('keep_3',16,2)->default('0');
            $table->decimal('com_3',16,2)->default('0');
            $table->decimal('amount_4',16,2)->default('0');
            $table->decimal('keep_4',16,2)->default('0');
            $table->decimal('com_4',16,2)->default('0');
            $table->decimal('amount_5',16,2)->default('0');
            $table->decimal('keep_5',16,2)->default('0');
            $table->decimal('com_5',16,2)->default('0');
            $table->decimal('amount_6',16,2)->default('0');
            $table->decimal('keep_6',16,2)->default('0');
            $table->decimal('com_6',16,2)->default('0');
            $table->decimal('amount_7',16,2)->default('0');
            $table->decimal('keep_7',16,2)->default('0');
            $table->decimal('com_7',16,2)->default('0');

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
