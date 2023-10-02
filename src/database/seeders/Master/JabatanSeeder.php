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
                'parent_code' => 'uk.1.1.1',
                'name'        => 'BERMITRA',
                'description' => 'Pusat Pemberdayaan Kemitraan APU PPT',
            ], [
                'code'        => 'uk.1.1.12',
                'parent_code' => 'uk.1.1',
                'name'        => 'PENGASUH',
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
            [
                'code'        => 'uk.1.1.2',
                'parent_code' => 'uk.1.1',
                'name'        => 'TEGAS',
                'description' => 'Deputi Bidang Strategi dan Kerja Sama',
            ],
            [
                'code'        => 'uk.1.1.2.4',
                'parent_code' => 'uk.1.1.2',
                'name'        => 'SALAM',
                'description' => 'Direktorat Strategi dan Kerja Sama Dalam Negeri',
            ],
            [
                'code'        => 'uk.1.1.2.5',
                'parent_code' => 'uk.1.1.2',
                'name'        => 'SERASI',
                'description' => 'Direktorat Strategi dan Kerja Sama Internasional',
            ],
            [
                'code'        => 'uk.1.1.2.6',
                'parent_code' => 'uk.1.1.2',
                'name'        => 'KREASI',
                'description' => 'Direktorat Hukum dan Regulasi',
            ],
            [
                'code'        => 'uk.1.1.4',
                'parent_code' => 'uk.1.1',
                'name'        => 'PEKA',
                'description' => 'Inspektorat',
            ],
            [
                'code'        => 'uk.1.1.5',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'LOGIS',
                'description' => 'Pusat Teknologi Informasi',
            ],
            [
                'code'        => 'uk.1.1.6',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'PATIH',
                'description' => 'Pusdiklat APU PPT',
            ],
            [
                'code'        => 'uk.1.1.9',
                'parent_code' => 'uk.1.1.1',
                'name'        => 'ASA',
                'description' => 'Deputi Bidang Analisis dan Pemeriksaan',
            ],
            [
                'code'        => 'uk.1.1.9.1',
                'parent_code' => 'uk.1.1.9',
                'name'        => 'SIASAT',
                'description' => 'Direktorat Analisis dan Pemeriksaan I',
            ],
            [
                'code'        => 'uk.1.1.9.2',
                'parent_code' => 'uk.1.1.9',
                'name'        => 'SIDIK',
                'description' => 'Direktorat Analisis dan Pemeriksaan II',
            ],
            [
                'code'        => 'uk.1.1.9.3',
                'parent_code' => 'uk.1.1.9',
                'name'        => 'SIAGA',
                'description' => 'Direktorat Analisis dan Pemeriksaan III',
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
