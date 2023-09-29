<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\AkunLembur;
use App\Seeder;

class AkunLemburSeeder extends Seeder
{
    public function run(): void
    {
        AkunLembur::create([
            'kode'  => '078.01.3377.EBA.994.002.L.521111',
            'nama'  => 'Belanja Keperluan Perkantoran',
            'jenis' => 'Non PNS',
            'tahun' => '2023',
        ]);

        AkunLembur::create([
            'kode'  => '078.01.3375.EBA.994.001.A.512211',
            'nama'  => 'Belanja Uang Lembur',
            'jenis' => 'Non PNS',
            'tahun' => '2023',
        ]);

        AkunLembur::create([
            'kode'  => '078.01.3375.EBA.994.001.A.512211',
            'nama'  => 'Belanja Uang Lembur',
            'jenis' => 'PNS',
            'tahun' => '2023',
        ]);
    }
}
