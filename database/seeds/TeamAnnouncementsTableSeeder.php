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
        factory(\App\Models\Coach\TeamAnnouncement::class, 5)->create();
    }
}
