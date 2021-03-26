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
        $category1 = new Category();
        $category1 ->name = 'hogar';
        $category1 -> save();

        $category2 = new Category();
        $category2 ->name = 'moda';
        $category2 -> save();

        $category3 = new Category();
        $category3 ->name = 'servicios';
        $category3 -> save();

        $category4= new Category();
        $category4->name = 'inmuebles';
        $category4-> save();

        $category5 = new Category();
        $category5 ->name = 'vehículos';
        $category5 -> save();

        $category6 = new Category();
        $category6 ->name = ' futuros  padres';
        $category6 -> save();

        $category7 = new Category();
        $category7 ->name = 'mascotas';
        $category7 -> save();

        $category8 = new Category();
        $category8 ->name = 'electrónica';
        $category8 -> save();

        $category9 = new Category();
        $category9 ->name = 'negocios';
        $category9 -> save();

        $category10 = new Category();
        $category10 ->name = 'empleo';
        $category10 -> save();

    

    }

}
