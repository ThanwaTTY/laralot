<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlaysetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('playsets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('member_id')->index();
            $table->integer('min_1');
            $table->integer('max_1');
            $table->integer('max_per_num1');
            $table->integer('min_2');
            $table->integer('max_2');
            $table->integer('max_per_num2');
            $table->integer('min_3');
            $table->integer('max_3');
            $table->integer('max_per_num3');
            $table->integer('min_4');
            $table->integer('max_4');
            $table->integer('max_per_num4');
            $table->integer('min_5');
            $table->integer('max_5');
            $table->integer('max_per_num5');
            $table->integer('min_6');
            $table->integer('max_6');
            $table->integer('max_per_num6');
            $table->integer('min_7');
            $table->integer('max_7');
            $table->integer('max_per_num7');
            $table->integer('min_8');
            $table->integer('max_8');
            $table->integer('max_per_num8');
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
        Schema::dropIfExists('playsets');
    }
}
