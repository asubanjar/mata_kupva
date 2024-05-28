<?php

namespace Database\Seeders;

use App\Models\Watchlist;
use Illuminate\Database\Seeder;
use League\Csv\Reader;

class WatchlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(database_path('seeders/data/watchlist.csv'), 'r');
        $csv->setHeaderOffset(0);

        foreach ($csv as $record) {
            Watchlist::create([
                'nama' => $record['nama'],
                'jabatan' => $record['jabatan'],
                'nama_kupva' => $record['nama_kupva'],
                'teregistrasi_ahu' => $record['teregistrasi_ahu'],
            ]);
        }
    }
}