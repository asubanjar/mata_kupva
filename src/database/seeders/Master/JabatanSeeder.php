<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\CsvSeed;
use App\Seeder;

class JabatanSeeder extends Seeder
{
    public function run(): void
    {
        $this->setTable('jabatans');

        // $this->identityInsert('ON');

        $seed = new CsvSeed(database_path('seeders/data/role.csv'));

        $seed->setDelimiter(';');

        $this->seed($seed);

        // $this->identityInsert('OFF');
    }
}
