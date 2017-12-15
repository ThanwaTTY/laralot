<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKeepTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('keeps', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->decimal('keep')->default(0);
            $table->decimal('keepset');
            $table->integer('keepover')->default(0);
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
        Schema::dropIfExists('keeps');
    }
}
