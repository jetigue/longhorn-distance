<?php

use Illuminate\Database\Seeder;

class RunningLogsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\RunningLog', 50)->create();
    }
}
