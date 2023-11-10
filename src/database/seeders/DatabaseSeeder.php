<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\Master\MasterDataSeeder;
use Database\Seeders\MonitoringPimpinan\MonitoringPimpinanDataSeeder;
use Database\Seeders\User\UserSeeder;
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
        $this->call(UserSeeder::class);
    }
}
