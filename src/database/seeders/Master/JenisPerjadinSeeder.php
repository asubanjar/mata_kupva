<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\JenisPerjadin;
use App\Seeder;

class JenisPerjadinSeeder extends Seeder
{
    public function run(): void
    {
        JenisPerjadin::create([
            'nama'       => 'Dalam Kota',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Dalam Kota Menginap',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Dalam Kota s/d 8 Jam',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Luar Kota',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Luar Kota Tidak Menginap',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Luar Negeri',
            'keterangan' => '',
        ]);

        JenisPerjadin::create([
            'nama'       => 'Online',
            'keterangan' => '',
        ]);
    }
}
