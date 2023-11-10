<?php

declare(strict_types=1);

namespace Database\Seeders\User;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserStrukturalSeeder::class);
        $this->call(UserStaffSeeder::class);
        $this->call(KedinasanRoleSeeder::class);
    }
}
