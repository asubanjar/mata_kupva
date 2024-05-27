<?php

namespace Database\Seeders\Master;

use App\Models\Master\Urgensi;
use Illuminate\Database\Seeder;

class UrgensiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $urgensis = [
            [
                'code' => 'XxJyPn38Yh.1',
                'name' => 'Segera',
            ],
            [
                'code' => 'XxJyPn38Yh.2',
                'name' => 'Sangat Segera',
            ],
            [
                'code' => 'XxJyPn38Yh.3',
                'name' => 'Biasa',
            ],
        ];

        foreach ($urgensis as $urgensi) {
            Urgensi::create([
                'code' => $urgensi['code'],
                'name' => $urgensi['name'],
            ]);
        }
    }
}
