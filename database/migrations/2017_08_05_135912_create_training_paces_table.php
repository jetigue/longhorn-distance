<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrainingPacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_paces', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedTinyInteger('VDOT');
            $table->unsignedSmallInteger('easy_mile_fast');
            $table->unsignedSmallInteger('easy_mile_slow');
            $table->unsignedSmallInteger('steady_km');
            $table->unsignedSmallInteger('steady_mile');
            $table->unsignedSmallInteger('tempo_400m');
            $table->unsignedSmallInteger('tempo_km');
            $table->unsignedSmallInteger('tempo_mile');
            $table->unsignedSmallInteger('interval_400m');
            $table->unsignedSmallInteger('interval_1000m')->nullable();
            $table->unsignedSmallInteger('interval_1200m')->nullable();
            $table->unsignedSmallInteger('interval_1600m')->nullable();
            $table->unsignedTinyInteger('repetition_200m');
            $table->unsignedTinyInteger('repetition_300m')->nullable();
            $table->unsignedTinyInteger('repetition_400m')->nullable();
            $table->unsignedTinyInteger('repetition_600m')->nullable();
            $table->unsignedTinyInteger('repetition_800m')->nullable();
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
        Schema::dropIfExists('training_paces');
    }
}
