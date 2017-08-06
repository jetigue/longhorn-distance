<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVdotValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vdot_values', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('VDOT');
            $table->unsignedSmallInteger('1500m');
            $table->unsignedSmallInteger('1600m');
            $table->unsignedSmallInteger('1mile');
            $table->unsignedSmallInteger('3000m');
            $table->unsignedSmallInteger('3200m');
            $table->unsignedSmallInteger('2mile');
            $table->unsignedSmallInteger('5k');
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
        Schema::dropIfExists('vdot_values');
    }
}
