<?php

use Illuminate\Database\Seeder;

class TimingMethodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Models\Admin\TimingMethod', 2)->create();
    }
}
