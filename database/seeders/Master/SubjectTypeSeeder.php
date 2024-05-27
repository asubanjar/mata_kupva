<?php

namespace Database\Seeders\Master;

use App\Models\Master\SubjectType;
use Illuminate\Database\Seeder;

class SubjectTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_types = [
            [
                'code' => 'RAPIMTAS',
                'name' => 'Rapat Pimpinan Terbatas',
            ],
            [
                'code' => 'RAPIMLAS',
                'name' => 'Rapat Pimpinan Diperluas',
            ],
            [
                'code' => 'RAPIMUM',
                'name' => 'Rapat Pimpinan Umum',
            ],
            [
                'code' => 'RAPIMSUS',
                'name' => 'Rapat Pimpinan Khusus',
            ],
            [
                'code' => 'NOTETAKING',
                'name' => 'Catatan Pimpinan',
            ],
        ];

        foreach ($subject_types as $subject_type) {
            SubjectType::create([
                'name' => $subject_type['name'],
                'code' => $subject_type['code'],
            ]);
        }
    }
}
