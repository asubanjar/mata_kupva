<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\JenisBiaya;
use App\Seeder;

class JenisBiayaSeeder extends Seeder
{
    public function run(): void
    {
        JenisBiaya::create([
            'nama'       => 'Uang Tiket',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Harian',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Representatif',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Transport',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Penginapan',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Sewa Kendaraan',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Lembur',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Makan',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Seluruhnya',
            'pembiayaan' => 'PPATK Pusat',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Transport',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Harian',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Representatif',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Penginapan',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Sewa Kendaraan',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Seluruhnya',
            'pembiayaan' => 'Pusdiklat APUPPT',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Seluruhnya',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Sewa Kendaraan',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Penginapan',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Transport',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Representatif',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Harian',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Makan',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);

        JenisBiaya::create([
            'nama'       => 'Uang Lembur',
            'pembiayaan' => 'Non PPATK',
            'keterangan' => '',
        ]);
    }
}
