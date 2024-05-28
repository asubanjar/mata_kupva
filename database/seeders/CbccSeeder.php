<?php

namespace Database\Seeders;

use App\Models\Cbcc;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class CbccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/cbcc.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Cbcc::create([
                'nama_pembawa' => $record['nama_pembawa'],
                'nomor_identitas' => $record['nomor_identitas'],
                'alamat' => $record['alamat'],
                'provinsi' => $record['provinsi'],
                'kabupaten' => $record['kabupaten'],
                'jenis_valuta_asing' => $record['jenis_valuta_asing'],
                'jumlah_valuta_asing' => $record['jumlah_valuta_asing'],
                'jumlah_rupiah' => $record['jumlah_rupiah'],
                'negara_asal' => $record['negara_asal'],
                'negara_tujuan' => $record['negara_tujuan'],
                'tanggal_kedatangan' => $record['tanggal_kedatangan'],
                'tujuan_pembawaan' => $record['tujuan_pembawaan'],
                'kepemilikan' => $record['kepemilikan'],
            ]);
        }
    }
}