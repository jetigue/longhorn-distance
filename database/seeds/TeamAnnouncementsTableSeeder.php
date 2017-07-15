<?php

use Illuminate\Database\Seeder;

class TeamAnnouncementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\TeamAnnouncement', 5)->create();
    }
}
