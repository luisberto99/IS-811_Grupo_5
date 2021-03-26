<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::Create([
            'name' => 'Inmuebles'
            ]);
        
        Category::Create([
            'name' => 'Vehiculos'
            ]);

        Category::Create([
            'name' => 'Hogar'
            ]);

        Category::Create([
            'name' => 'Moda'
            ]);

        Category::Create([
            'name' => 'Futuros Padres'
            ]);

        Category::Create([
            'name' => 'Mascotas'
            ]);

        Category::Create([
            'name' => 'Electronica'
            ]);

        Category::Create([
            'name' => 'Servicios'
            ]);

        Category::Create([
            'name' => 'Negocios'
            ]);

        Category::Create([
            'name' => 'Empleos'
            ]);
    }
}
