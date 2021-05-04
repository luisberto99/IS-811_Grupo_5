<?php

namespace Database\Seeders;

use App\Models\Advert;
use App\Models\Product;
use App\Models\Subscription;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\AdvertComment;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);

        $this->call(DepartamentSeeder::class);
        $this->call(TownshipSeeder::class);
        
        User::Create([
            'name' => 'Test',
            'email' => 'test@test.com',
            'gender'=>'masculino',
            'birthdate'=>'2000-12-12',
            'address'=>'direccion del usuario',
            'number'=>'18007878',
            'condition'=>1,
            'email_verified_at' => now(),
            'password' => '$2y$10$rq5oCT9eD1szjfUsTn5E8uJWCMCvFRjUsrq85t/pz1Qy9CRxoDADu', // password asd.123456
            'township_id' => rand(1,200),
            'profile_photo_path' => 'profile-photos/user.png'
            ])->assignRole('Administrador');

        User::factory(500)->create();
        $this->call(UserTypeSeeder::class);
        $this->call(UserStatusSeeder::class);
        $this->call(CategorySeeder::class);
        Subscription::factory(90)->Create();
        $this->call(AdvertStatusSeeder::class);

        Advert::factory(900)->create();
        $this->call(CurrencySeeder::class);
        Product::factory(900)->create();
        AdvertComment::factory(100)->create();
        $this->call(AdvertPhotoSeeder::class);

        
        

    }
}
