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
        $this->call(JabatanSeeder::class);
        $this->call(MasterDataSeeder::class);
        $this->call(MonitoringPimpinanDataSeeder::class);
        $this->call(RolePermissionSeeder::class);
        $this->call(UserSeeder::class);
    }
}
