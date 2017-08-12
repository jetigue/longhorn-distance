<?php

use Illuminate\Database\Seeder;

class AthleteTrialResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\AthleteTrialResult', 100)->create();
    }
}
