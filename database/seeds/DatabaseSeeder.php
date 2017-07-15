<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserRolesTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(DayTimesTableSeeder::class);
    	$this->call(RunEffortsTableSeeder::class);
    	$this->call(RunFeelingsTableSeeder::class);
        $this->call(RunTypesTableSeeder::class);
        $this->call(TerrainTypesTableSeeder::class);
        $this->call(RunningLogsTableSeeder::class);
        $this->call(TeamAnnouncementsTableSeeder::class);
        $this->call(TeamEventsTableSeeder::class);
        
    }
}
