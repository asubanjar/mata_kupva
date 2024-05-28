<?php

namespace Database\Seeders;

use App\Models\AhuOnline;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class AhuOnlineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/ahu_online.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            AhuOnline::create([
                'jenis_kegiatan' => $record['jenis_kegiatan'],
                'pemegang_saham' => $record['pemegang_saham'],
                'nama_perseroan' => $record['nama_perseroan'],
                'nama_singkat' => $record['nama_singkat'],
                'alamat_perseroan' => $record['alamat_perseroan'],
                'provinsi' => $record['provinsi'],
                'kabupaten' => $record['kabupaten'],
            ]);
        }
    }
}