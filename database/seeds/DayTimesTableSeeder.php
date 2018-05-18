<?php

use Illuminate\Database\Seeder;

class DayTimesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Admin\DayTime::class, 5)->create();
    }
}
