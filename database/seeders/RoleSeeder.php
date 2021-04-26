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
        $Activo = Role::create(['name' => 'Inactivo']);
        $Estadistica = Role::create(['name' => 'Estadistica']);
        $Moderador = Role::create(['name' => 'Moderador']);
        $Administrador = Role::create(['name' => 'Administrador']);

        /* ANUNCIOS */
        Permission::create(['name'=>'anuncio.publicar'])->syncRoles([$Activo, $Estadistica, $Moderador, $Administrador]);
        Permission::create(['name'=>'anuncio.mio.eliminar'])->syncRoles([$Activo, $Estadistica, $Moderador, $Administrador]);
        
        /* PERMISOS ADMINISTRATIVOS */
        Permission::create(['name' => 'admin.home'])->syncRoles([$Estadistica, $Moderador, $Administrador]);

        /* ESTADISTICA */
        Permission::create(['name' => 'admin.estadisticas'])->syncRoles([$Estadistica, $Administrador]);
        Permission::create(['name' => 'admin.categories'])->syncRoles([$Estadistica, $Administrador]);
        
        /* MODERADOR */
        Permission::create(['name' => 'admin.moderador'])->syncRoles([$Moderador, $Administrador]);
        Permission::create(['name' => 'admin.anuncio.eliminar'])->syncRoles([$Moderador, $Administrador]);
        Permission::create(['name' => 'admin.user'])->syncRoles([$Moderador, $Administrador]);
        Permission::create(['name' => 'admin.user.estado'])->syncRoles([$Moderador, $Administrador]);

        /* ADMINISTRADOR */
        Permission::create(['name' => 'admin.categories.create'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'admin.categories.edit'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'admin.categories.delete'])->syncRoles([$Administrador]);
        Permission::create(['name' => 'admin.user.permisos'])->syncRoles([$Administrador]);

        
        

       /* $roleAdmin->permissions()->attach([1,2,3]); */


    }
}
