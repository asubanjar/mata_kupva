<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use Illuminate\Database\Seeder;

class MasterDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $this->call(AkunLemburSeeder::class);
        $this->call(DipaSeeder::class);
        $this->call(JenisBiayaSeeder::class);
        $this->call(JenisKegiatanSeeder::class);
        $this->call(JenisPerjadinSeeder::class);
        $this->call(JabatanSeeder::class);
        $this->call(KotaKabupatenSeeder::class);
        $this->call(SifatSeeder::class);
        $this->call(SubjectTypeSeeder::class);
        $this->call(UrgensiSeeder::class);
        $this->call(GroupSeeder::class);
        $this->call(UnitKerjaSeeder::class);
    }
}
