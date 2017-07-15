<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('team_events', function (Blueprint $table) {
            $table->increments('id');
            $table->string('event');
            $table->date('event_date');
            $table->string('event_time');
            $table->string('location');
            $table->string('details');
            $table->string('link')->nullable();
            $table->string('link_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('team_events');
    }
}
