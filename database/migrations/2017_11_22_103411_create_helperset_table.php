<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHelpersetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('helpersets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('helper_id')->unsigned()->index();
            $table->integer('listplay');
            $table->integer('member');
            $table->integer('listkeep');
            $table->integer('winlose');
            $table->integer('transfer');
            $table->integer('manage');
            $table->integer('cancelplay');
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
        Schema::dropIfExists('helperset');
    }
}
