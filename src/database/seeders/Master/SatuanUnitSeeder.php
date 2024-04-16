<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\SatuanUnit;
use Illuminate\Database\Seeder;

class SatuanUnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $satuan_units = [
            [
                'code'      => 'XxJyPn38Yh.1',
                'name'      => 'Lembar',
            ],
            [
                'code'      => 'XxJyPn38Yh.2',
                'name'      => 'Berkas',
            ],
        ];

        foreach ($satuan_units as $satuan_unit) {
            SatuanUnit::create([
                'code'      => $satuan_unit['code'],
                'name'      => $satuan_unit['name'],
            ]);
        }
    }
}
