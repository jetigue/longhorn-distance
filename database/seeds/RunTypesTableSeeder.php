<?php

use Illuminate\Database\Seeder;

class RunTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\RunType', 5)->create();
    }
}
