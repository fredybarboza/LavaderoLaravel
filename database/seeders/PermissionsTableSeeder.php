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
 
         //Admin
         $admin = Role::create(['name' => 'Admin']);
 
         $admin->givePermissionTo([
             'pedidos.index',
             'pedidos.edit',
             'pedidos.show',
             'pedidos.destroy'
         ]);
         
          //Empleado
          $empleado = Role::create(['name' => 'Empleado']);
 
          $empleado->givePermissionTo([
              'pedidos.index',
              'pedidos.show',
              'pedidos.edit',
          ]);
          
          $user = User::find(1); 
         $user->assignRole('Admin');
    }
}
