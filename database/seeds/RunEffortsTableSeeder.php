<?php

use Illuminate\Database\Seeder;

class RunEffortsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin\RunEffort::class, 5)->create();
    }
}
