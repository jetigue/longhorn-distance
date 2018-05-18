<?php

use Illuminate\Database\Seeder;

class RunFeelingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin\RunFeeling::class, 5)->create();
    }
}
