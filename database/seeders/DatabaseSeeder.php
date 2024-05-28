<?php

declare(strict_types=1);

namespace Database\Seeders;

use Database\Seeders\User\UserSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(AhuOnlineSeeder::class);
        $this->call(LaporanKupvaSeeder::class);
        $this->call(CbccSeeder::class);
        $this->call(PvaSeeder::class);
        $this->call(WatchlistSeeder::class);
    }
}