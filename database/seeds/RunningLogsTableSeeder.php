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
        factory(\App\Models\User\RunningLog::class, 50)->create();
    }
}
