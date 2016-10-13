<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $teams = ['Diseño', 'Texto', 'Programación'];

        foreach ($teams as $team) {
            App\Team::create(['name' => $team]);
        }
    }
}
