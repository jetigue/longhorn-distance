<?php

use Illuminate\Database\Seeder;

class TimeTrialResultsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Results\Individual\TimeTrialResult', 100)->create();
    }
}
