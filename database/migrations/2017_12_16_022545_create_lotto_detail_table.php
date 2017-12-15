<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLottoDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lotto_details', function (Blueprint $table) {
            $table->increments('id');
            $table->string('lottodate');
            $table->integer('member_id')->index();
            $table->decimal('total',16,2);
            $table->decimal('member_export',16,2);
            $table->decimal('member_committion',16,2);
            $table->decimal('member_total',16,2);
            $table->decimal('agent_set',16,2);
            $table->decimal('agent_committion',16,2);
            $table->decimal('agent_total',16,2);
            $table->decimal('company_set',16,2);
            $table->decimal('company_committion',16,2);
            $table->decimal('company_total',16,2);
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
        Schema::dropIfExists('lotto_details');
    }
}
