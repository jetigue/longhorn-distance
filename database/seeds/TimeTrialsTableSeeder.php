<?php

use Illuminate\Database\Seeder;

class TimeTrialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Models\Coach\TimeTrial::class, 20)->create();
    }
}
