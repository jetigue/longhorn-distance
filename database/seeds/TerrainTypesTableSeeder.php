<?php

use Illuminate\Database\Seeder;

class TerrainTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\TerrainType', 5)->create();
    }
}
