<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RolesPermisosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Resetea la cache de roles y permisos
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // creamos permisos
        $permisos = [
            'ver ajustes',


            'crear rol',
            'editar rol',
            'eliminar rol',
            'ver rol',
            'crear permiso',
            'editar permiso',
            'eliminar permiso',
            'ver permiso',
        ];

        foreach ($permisos as $permiso) {
            Permission::create(['name' => $permiso]);
        }

        // creamos roles
        $roles = [
            'Super',
            'Administrador',
            'Empresa',
            'Empleado',
            'Cliente',
        ];

        foreach ($roles as $rol) {
            $role = Role::create(['name' => $rol]);
            // asignamos permisos a los roles
            switch ($rol) {
                case 'Super':
                    $role->givePermissionTo(Permission::all());
                    break;
                case 'Administrador':
                    $role->givePermissionTo(Permission::all());
                    break;
                // case 'Docente':
                //     $role->givePermissionTo([
                //         'crear usuario',
                //         'editar usuario',
                //         'ver usuario',

                //         'ver gestion',
                //         'listar gestion',

                //         'ver paralelo',
                //         'listar paralelo',

                //         'crear estudiante',
                //         'editar estudiante',
                //         'ver estudiante',
                //         'listar estudiante',

                //     ]);
                //     break;
            }
        }



    }
}
