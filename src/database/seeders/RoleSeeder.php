<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /** ROLE */
        $adminRole = Role::create(['name' => 'Admin']);
        $adminRole->syncPermissions([
            'master',
            'monitoring',
        ]);

        Role::create(['name' => 'Super Admin']);
    }
}
