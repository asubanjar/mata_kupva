<?php

namespace Database\Seeders;

use Database\Seeders\Master\MasterDataSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(UserSeeder::class);
        $this->call(MasterDataSeeder::class);
    }
}
