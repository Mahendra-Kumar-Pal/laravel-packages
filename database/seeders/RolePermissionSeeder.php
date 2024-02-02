<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();
        
        $role_admin = Role::create(['name'=>'Admin']);
        $role_user = Role::create(['name'=>'User']);

        $permissions  = ['show', 'create', 'edit', 'delete'];
        foreach ($permissions as $value) {
            Permission::create(['name'=>$value]);
        }
        
        $role_admin->givePermissionTo(Permission::all());
        $role_user->givePermissionTo(['show', 'create']);
    }
}
