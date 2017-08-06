<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTimeTrialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('time_trials', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedSmallInteger('gender_id');
            $table->date('trial_date');
            $table->unsignedSmallInteger('season_id');
            $table->unsignedSmallInteger('distance_id');
            $table->unsignedSmallInteger('terrain_type_id');
            $table->unsignedSmallInteger('timing_method_id');
            $table->text('notes')->nullable();
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
        Schema::dropIfExists('time_trials');
    }
}
