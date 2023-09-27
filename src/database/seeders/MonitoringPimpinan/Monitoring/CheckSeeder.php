<?php

namespace Database\Seeders\MonitoringPimpinan\Monitoring;

use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\Check;
use Illuminate\Database\Seeder;

class CheckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $checks = [
            [
                'name'      => 'Check 1',
                'start'     => '2021-09-13 00:00:00.000',
                'end'       => '2023-09-13 00:00:00.000',
                'action_id' => Action::where('name', 'Melaksanakan probity audit berbasis risiko')->first()->id,
            ],
            [
                'name'      => 'Check 2',
                'start'     => '2021-09-13 00:00:00.000',
                'end'       => '2024-09-13 00:00:00.000',
                'action_id' => Action::where('name', 'Melaksanakan probity audit berbasis risiko')->first()->id,
            ],
        ];

        foreach ($checks as $check) {
            Check::create([
                'name'      => $check['name'],
                'start'     => $check['start'],
                'end'       => $check['end'],
                'action_id' => $check['action_id'],
            ]);
        }
    }
}
