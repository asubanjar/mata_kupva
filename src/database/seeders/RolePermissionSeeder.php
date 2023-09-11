<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        /** PERMISSION */
        Permission::updateOrCreate(['name' => 'master']);
        Permission::updateOrCreate(['name' => 'subject']);

        /** ROLE */
        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->syncPermissions([
            'master',
            'subject',
        ]);

        Role::create(['name' => 'Super Admin']);
    }
}