<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\Dipa;
use App\Seeder;

class DipaSeeder extends Seeder
{
    public function run(): void
    {
        Dipa::create([
            'kode'       => '078.01.1.453374/2023',
            'tahun'      => '2023',
            'pembiayaan' => 'PPATK Pusat',
        ]);

        Dipa::create([
            'kode'       => '078.01.2.417654/2023',
            'tahun'      => '2023',
            'pembiayaan' => 'Pusdiklat APUPPT',
        ]);
    }
}
