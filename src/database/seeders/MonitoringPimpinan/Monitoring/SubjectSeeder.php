<?php

namespace Database\Seeders\MonitoringPimpinan\Monitoring;

use App\Models\Master\SubjectType;
use App\Models\MonitoringPimpinan\Monitoring\Subject;
use Illuminate\Database\Seeder;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_types = [
            [
                'name'            => 'Note Rakin 2021',
                'comment'         => 'Rapat Pimpinan Terbatas',
                'opened'          => now(),
                'subject_type_id' => SubjectType::where('code_name', 'NOTETAKING')->first()->id,
            ],
        ];

        foreach ($subject_types as $subject_type) {
            Subject::create([
                'name'            => $subject_type['name'],
                'comment'         => $subject_type['comment'],
                'opened'          => $subject_type['opened'],
                'subject_type_id' => $subject_type['subject_type_id'],
            ]);
        }
    }
}