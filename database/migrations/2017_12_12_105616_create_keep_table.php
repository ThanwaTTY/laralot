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
            $table->decimal('keepset1')->default(0);
            $table->decimal('keepset2')->default(0);
            $table->decimal('keepset3')->default(0);
            $table->decimal('keepset4')->default(0);
            $table->decimal('keepset5')->default(0);
            $table->decimal('keepset6')->default(0);
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
