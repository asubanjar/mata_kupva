<?php

namespace Database\Seeders\Master;

use App\Models\Master\Jabatan;
use Illuminate\Database\Seeder;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jabatans = [
            [
                'code'        => 'uk.1',
                'parent_code' => 'uk',
                'name'        => 'KEPALA PPATK',
                'description' => 'Kepala PPATK',
            ],
            [
                'code'        => 'uk.1.1.1',
                'parent_code' => 'uk.1',
                'name'        => 'SETIA',
                'description' => 'Sekretaris Utama',
            ],
            [
                'code'        => 'uk.1.1.1.1',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'BIRU',
                'description' => 'Biro Umum',
            ],
            [
                'code'        => 'uk.1.1.1.2',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'BINCANG',
                'description' => 'Biro Perencanaan dan Keuangan',
            ],
            [
                'code'        => 'uk.1.1.1.3',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'BERMAKNA',
                'description' => 'Biro Sumber Daya Manusia, Organisasi dan Tata Laksana',
            ],
            [
                'code'        => 'uk.1.1.10',
                'parent_code' => 'uk.1.1',
                'name'        => 'BERMITRA',
                'description' => 'Pusat Pemberdayaan Kemitraan APU PPT',
            ], [
                'code'        => 'uk.1.1.12',
                'parent_code' => 'uk.1.1',
                'name'        => 'Plt. PENGASUH',
                'description' => 'Deputi Bidang Pelaporan dan Pengawasan Kepatuhan',
            ],
            [
                'code'        => 'uk.1.1.12.1',
                'parent_code' => 'uk.1.1.12',
                'name'        => 'REKAN',
                'description' => 'Direktorat Pelaporan',
            ], [
                'code'        => 'uk.1.1.12.2',
                'parent_code' => 'uk.1.1.12',
                'name'        => 'PENJAGA',
                'description' => 'Direktorat Pengawasan Kepatuhan Penyedia Jasa Keuangan',
            ],
            [
                'code'        => 'uk.1.1.12.3',
                'parent_code' => 'uk.1.1.12',
                'name'        => 'PATUH',
                'description' => 'Direktorat Pengawasan Kepatuhan Penyedia Barang dan/ atau Jasa Lain dan Profesi',
            ],
        ];

        foreach ($jabatans as $jabatan) {
            Jabatan::create([
                'code'        => $jabatan['code'],
                'parent_code' => $jabatan['parent_code'],
                'name'        => $jabatan['name'],
                'description' => $jabatan['description'],
            ]);
        }
    }
}
