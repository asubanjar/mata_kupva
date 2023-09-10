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
                'code_name' => 'RAPIMTAS',
                'name'      => 'Rapat Pimpinan Terbatas',
            ],
            [
                'code_name' => 'RAPIMLAS',
                'name'      => 'Rapat Pimpinan Diperluas',
            ],
            [
                'code_name' => 'RAPIMUM',
                'name'      => 'Rapat Pimpinan Umum',
            ],
            [
                'code_name' => 'RAPIMSUS',
                'name'      => 'Rapat Pimpinan Khusus',
            ],
            [
                'code_name' => 'NOTETAKING',
                'name'      => 'Catatan Pimpinan',
            ],
        ];

        foreach ($subject_types as $subject_type) {
            SubjectType::create([
                'name'      => $subject_type['name'],
                'code_name' => $subject_type['code_name'],
            ]);
        }
    }
}