<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\Master\MasterDataSeeder;
use Database\Seeders\MonitoringPimpinan\MonitoringPimpinanDataSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(MasterDataSeeder::class);
        $this->call(MonitoringPimpinanDataSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserStrukturalSeeder::class);
        $this->call(UserStaffSeeder::class);
    }
}
