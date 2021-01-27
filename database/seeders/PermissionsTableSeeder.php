<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         //Permission list
         Permission::create(['name' => 'pedidos.index']);
         Permission::create(['name' => 'pedidos.edit']);
         Permission::create(['name' => 'pedidos.show']);
         Permission::create(['name' => 'pedidos.destroy']);
         Permission::create(['name' => 'pedidos.asignar']);
         Permission::create(['name' => 'empleados.index']);
         Permission::create(['name' => 'empleados.store']);
         Permission::create(['name' => 'empleados.destroy']);
         Permission::create(['name' => 'users.index']);
         Permission::create(['name' => 'role.create']);
         Permission::create(['name' => 'role.view']);
 
         //Admin
         $admin = Role::create(['name' => 'Admin']);
 
         $admin->givePermissionTo([
             'pedidos.index',
             'pedidos.edit',
             'pedidos.show',
             'pedidos.destroy',
             'pedidos.asignar',
             //EMPLEADOS
             'empleados.index',
             'empleados.store',
             'empleados.destroy',
             //USERS
             'users.index',
             //ROLES
             'role.create',
             'role.view'

         ]);
         
          //Empleado
          $empleado = Role::create(['name' => 'Empleado']);
 
          $empleado->givePermissionTo([
              'pedidos.index',
              'pedidos.show',
              'pedidos.edit',
              'pedidos.asignar',
          ]);
          
          $user = User::find(1); 
         $user->assignRole('Admin');
    }
}
