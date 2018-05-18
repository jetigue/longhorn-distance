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
        factory(\App\Models\Admin\RunType::class, 5)->create();
    }
}
