<?php

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
        $urgensis = [
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

        foreach ($urgensis as $urgensi) {
            Sifat::create([
                'code'      => $urgensi['code'],
                'name'      => $urgensi['name'],
                'code_name' => $urgensi['code_name'],
            ]);
        }
    }
}