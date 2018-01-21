<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRunningLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('running_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->date('run_date');
            $table->decimal('distance', 3, 1);
            $table->unsignedInteger('total_seconds');
            $table->unsignedSmallInteger('day_time_id');
            $table->unsignedSmallInteger('run_type_id');
            $table->unsignedSmallInteger('terrain_type_id');
            $table->unsignedSmallInteger('run_effort_id');
            $table->unsignedSmallInteger('run_feeling_id');
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
        Schema::dropIfExists('running_logs');
    }
}
