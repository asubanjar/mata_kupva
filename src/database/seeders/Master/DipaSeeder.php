<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\Dipa;
use App\Seeder;
use Carbon\Carbon;

class DipaSeeder extends Seeder
{
    public function run(): void
    {
        Dipa::create([
            'kode'       => '078.01.1.453374/2023',
            'tanggal'    => Carbon::now(),
            'tahun'      => '2023',
            'pembiayaan' => 'PPATK Pusat',
        ]);

        Dipa::create([
            'kode'       => '078.01.2.417654/2023',
            'tanggal'    => Carbon::now(),
            'tahun'      => '2023',
            'pembiayaan' => 'Pusdiklat APUPPT',
        ]);
    }
}
