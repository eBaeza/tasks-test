<?php

use Illuminate\Database\Seeder;

class ResourceTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $types = ['Infografía', 'Imagen', 'HTML'];

        foreach ($types as $type) {
            App\ResourceType::create(['name' => $type]);
        }
    }
}
