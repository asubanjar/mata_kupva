<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\JenisKegiatan;
use App\Seeder;

class JenisKegiatanSeeder extends Seeder
{
    public function run(): void
    {
        JenisKegiatan::create([
            'nama'       => 'Narasumber',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Menghadiri Undangan',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Monitoring / Pemeliharaan DRC',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Lembur',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Monitoring / Pemeliharaan Ruang Arsip',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Penguji',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Lain - lain',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Sosialisasi',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Asistensi',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Pelatihan Internal',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Audit',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Keterangan Ahli',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Konsinyering',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Penelitian Setempat',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Pemeriksaan',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Rapat Koordinasi',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Pendampingan',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Peserta',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Fasilitator',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Moderator',
            'keterangan' => '',
        ]);

        JenisKegiatan::create([
            'nama'       => 'Master of Ceremony',
            'keterangan' => '',
        ]);
    }
}
