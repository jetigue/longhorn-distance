<?php

use Illuminate\Database\Seeder;

class DistancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin\Distance::class, 1)->create();
    }
}
