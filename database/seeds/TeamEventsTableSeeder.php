<?php

use Illuminate\Database\Seeder;

class TeamEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Coach\TeamEvent::class, 5)->create();
    }
}
