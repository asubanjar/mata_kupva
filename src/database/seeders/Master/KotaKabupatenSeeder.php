<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\CsvSeed;
use App\Seeder;

class KotaKabupatenSeeder extends Seeder
{
    public function run(): void
    {
        $this->setTable('kota_kabupatens');

        // $this->identityInsert('ON');

        $seed = new CsvSeed(database_path('seeders/data/kota-kabupaten.csv'));

        $seed->setDelimiter(';');

        $this->seed($seed, 514);

        // $this->identityInsert('OFF');
    }
}
