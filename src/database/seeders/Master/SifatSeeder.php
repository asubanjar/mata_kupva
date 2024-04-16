<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\Sifat;
use Illuminate\Database\Seeder;

class SifatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sifats = [
            [
                'code'      => 'XxJyPn38Yh.1',
                'name'      => 'Biasa',
                'code_name' => 'B',
            ],
            [
                'code'      => 'XxJyPn38Yh.2',
                'name'      => 'Rahasia',
                'code_name' => 'R',
            ],
            [
                'code'      => 'XxJyPn38Yh.3',
                'name'      => 'Sangat Rahasia',
                'code_name' => 'SR',
            ],
            [
                'code'      => 'XxJyPn38Yh.4',
                'name'      => 'Terbatas',
                'code_name' => 'T',
            ],
        ];

        foreach ($sifats as $sifat) {
            Sifat::create([
                'code'      => $sifat['code'],
                'name'      => $sifat['name'],
                'code_name' => $sifat['code_name'],
            ]);
        }
    }
}
