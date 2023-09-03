<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        $role1 = Role::create(['name' => 'Operador']);
        $role2 = Role::create(['name' => 'Director']);

        Permission::create(['name' => 'usuario.store'])->assignRole($role2);
        Permission::create(['name' => 'usuario.academy.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'usuario.academy.store'])->assignRole($role2);
        Permission::create(['name' => 'usuario.index'])->assignRole($role2);
        Permission::create(['name' => 'operador.index'])->assignRole($role1);
        Permission::create(['name' => 'perfil.index'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'perfil.edit'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'perfil.update'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ticket.index'])->assignRole($role1);
        Permission::create(['name' => 'ticket.indexValidados'])->assignRole($role1);
        Permission::create(['name' => 'ticket.misTickets'])->assignRole($role2);
        Permission::create(['name' => 'ticket.show'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'ticket.update'])->assignRole($role1);

    }
}
