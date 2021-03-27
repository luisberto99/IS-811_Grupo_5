<?php

namespace Database\Seeders;

use App\Models\AdvertStatus;
use Illuminate\Database\Seeder;

class AdvertStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdvertStatus::create([
            'status'=>'Estado1'
        ]);

        AdvertStatus::create([
            'status'=>'Estado2'
        ]);
    }
}
