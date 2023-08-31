<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(DipaSeeder::class);
        $this->call(UrgensiSeeder::class);
    }
}
