<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpencloselotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('opencloselots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('openclose_id')->index();
            $table->integer('govlot')->default('0');
            $table->integer('tkslot')->default('0');
            $table->integer('setlot')->default('0');
            $table->integer('loaslot')->default('0');
            $table->integer('malalot')->default('0');
            $table->integer('setabroad')->default('0');
            $table->integer('vnlot')->default('0');
            $table->integer('typebet')->default('0');
            $table->integer('lotgovuse')->default('0');
            $table->integer('lotgov3')->default('0');
            $table->integer('lotuse')->default('0');
            $table->integer('lot3')->default('0');
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
        Schema::dropIfExists('opencloselots');
    }
}
