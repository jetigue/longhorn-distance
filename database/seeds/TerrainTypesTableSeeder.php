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
        factory(\App\Models\Admin\TerrainType::class, 5)->create();
    }
}
