<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        
        $admin = Permission::create(['name' => 'admin.home']);
        $Category = Permission::create(['name' => 'admin.categories.index']);
        $createCategory =Permission::create(['name' => 'admin.categories.create']);
        Permission::create(['name' => 'admin.categories.edit']);
        Permission::create(['name' => 'admin.categories.delete']);
        
        
        $roleAdmin = Role::create(['name' => 'Admin'])->syncPermissions([$admin,$Category, $createCategory]);
        $roleUser = Role::create(['name' => 'user']);

       /* $roleAdmin->permissions()->attach([1,2,3]); */


    }
}
