<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\Group;
use App\Seeder;

class GroupSeeder extends Seeder
{
    public function run(): void
    {
        $groups = [
            [
                'name'      => 'Administrator Pusat',
            ],
            [
                'name'      => 'Administrator Satuan Organisasi',
            ],
            [
                'name'      => 'Pejabat Struktural',
            ],
            [
                'name'      => 'Sekretaris Pimpinan',
            ],
            [
                'name'      => 'Pencatat Surat',
            ],
            [
                'name'      => 'Pengelola Arsip / Arsiparis',
            ],
            [
                'name'      => 'Staf / Pelaksana',
            ],
        ];

        foreach ($groups as $group) {
            Group::create([
                'name' => $group['name'],
            ]);
        }
    }
}
