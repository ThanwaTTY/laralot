<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataHitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('data_hits', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->integer('user_id')->unsigned()->index();
        //     $table->integer('threetop_min');
        //     $table->integer('threetop_max');
        //     $table->integer('threetop_topnumber');
        //     $table->integer('threebootom_min');
        //     $table->integer('threebootom_max');
        //     $table->integer('threebootom_topnumber');
        //     $table->integer('threetod_min');
        //     $table->integer('threetod_max');
        //     $table->integer('threetod_topnumber');
        //     $table->integer('twotop_min');
        //     $table->integer('twotop_max');
        //     $table->integer('twotop_topnumber');
        //     $table->integer('twobootom_min');
        //     $table->integer('twobootom_max');
        //     $table->integer('twobootom_topnumber');
        //     $table->integer('twotod_min');
        //     $table->integer('twotod_max');
        //     $table->integer('twotod_topnumber');
        //     $table->integer('runtop_min');
        //     $table->integer('runtop_max');
        //     $table->integer('runtop_topnumber');
        //     $table->integer('runbootom_min');
        //     $table->integer('runbootom_max');
        //     $table->integer('runbootom_topnumber');
        //     $table->rememberToken();
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::dropIfExists('data_hits');
    }
}
