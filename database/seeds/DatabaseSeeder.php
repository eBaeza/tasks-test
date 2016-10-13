<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $this->call(ResourceTypesTableSeeder::class);
        $this->call(TeamsTableSeeder::class);
    }
}
