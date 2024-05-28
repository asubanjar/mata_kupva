<?php

namespace Database\Seeders;

use App\Models\Pva;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class PvaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/pva.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Pva::create([
                'nama_pva' => $record['nama_pva'],
                'pemegang_saham' => $record['pemegang_saham'],
                'jumlah_aset' => $record['jumlah_aset'],
                'catatan_kasus' => $record['catatan_kasus'],
                'flag_anomali_transaksi' => $record['flag_anomali_transaksi'],
                'tingkat_kepatuhan' => $record['tingkat_kepatuhan'],
            ]);
        }
    }
}