<?php

namespace Database\Seeders\User;

use App\CsvSeed;
use App\Seeder;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        $this->setTable('permissions');

        $seed = new CsvSeed(database_path('seeders/data/permission.csv'));

        $this->sync($seed, 'name');
    }
}
