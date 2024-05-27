<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\JenisNaskah;
use Illuminate\Database\Seeder;

class JenisNaskahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenis_naskahs = [
            [
                'code'          => 'XxJyPn38Yh.1',
                'name'          => 'Nota Dinas',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.2',
                'name'          => 'Undangan',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.3',
                'name'          => 'Surat Tugas',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.5',
                'name'          => 'Surat Dinas',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.6',
                'name'          => 'Naskah Dinas Lain',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.7',
                'name'          => 'Laporan',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.8',
                'name'          => 'Permohonan Perjalanan Dinas',
                'description'   => null,
            ],
            [
                'code'          => 'XxJyPn38Yh.9',
                'name'          => 'Nota Dinas - Pengantar',
                'description'   => null,
            ],
        ];

        foreach ($jenis_naskahs as $jenis_naskah) {
            JenisNaskah::create([
                'code'          => $jenis_naskah['code'],
                'name'          => $jenis_naskah['name'],
                'description'   => $jenis_naskah['description'],
            ]);
        }
    }
}
