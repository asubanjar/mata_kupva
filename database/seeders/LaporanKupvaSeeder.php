<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\LaporanKupva;
use League\Csv\Reader;

class LaporanKupvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/laporan_kupva.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            LaporanKupva::create([
                'sandi_kupva' => $record['sandi_kupva'],
                'nama_kupva' => $record['nama_kupva'],
                'tahun' => $record['tahun'],
                'bulan' => $record['bulan'],
                'jenis_produk' => $record['jenis_produk'],
                'jenis_valuta' => $record['jenis_valuta'],
                'saldo_awal_valas' => $record['saldo_awal_valas'],
                'saldo_awal_rupiah' => $record['saldo_awal_rupiah'],
                'volume_pembelian_valas' => $record['volume_pembelian_valas'],
                'volume_pembelian_rupiah' => $record['volume_pembelian_rupiah'],
                'volume_penjualan_valas' => $record['volume_penjualan_valas'],
                'volume_penjualan_rupiah' => $record['volume_penjualan_rupiah'],
                'saldo_akhir' => $record['saldo_akhir'],
                'nilai_kurs' => $record['nilai_kurs'],
                'saldo_akhir_rupiah' => $record['saldo_akhir_rupiah'],
            ]);
        }
    }
}