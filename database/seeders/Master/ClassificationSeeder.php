<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\CsvSeed;
use App\Seeder;

use function database_path;

class ClassificationSeeder extends Seeder
{
    public function run(): void
    {
        $this->setTable('classifications');

        $this->identityInsert('ON');

        $seed = new CsvSeed(database_path('seeders/data/classification.csv'));

        $seed->setDelimiter(';');

        $this->seed($seed);

        $this->identityInsert('OFF');
    }
}
