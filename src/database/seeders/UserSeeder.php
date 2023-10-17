<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\CsvSeed;
use App\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $this->setTable('users');

        $this->identityInsert('ON');

        $seed = new CsvSeed(database_path('seeders/data/peopleupdate.csv'));

        $seed->setDelimiter(';');

        $this->seed($seed);

        $this->identityInsert('OFF');
    }
}
