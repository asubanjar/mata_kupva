<?php

declare(strict_types=1);

namespace Database\Seeders\MonitoringPimpinan;

use Database\Seeders\MonitoringPimpinan\Monitoring\SubjectSeeder;
use Illuminate\Database\Seeder;

class MonitoringPimpinanDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(SubjectSeeder::class);
    }
}