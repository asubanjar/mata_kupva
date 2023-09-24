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
        $subjects = [
            [
                'name'            => 'Resolusi Kerja Hebat (ROKET) - RAJA 2023',
                'comment'         => 'Penetapan Quick Win dan Rencana Aksi Atas Resolusi Kerja Hebat (ROKET) - Rapat Kerja PPATK 2023',
                'opened'          => '2021-09-25 00:00:00.000',
                'subject_type_id' => SubjectType::where('code', 'NOTETAKING')->first()->id,
            ],
        ];

        foreach ($subjects as $subject) {
            Subject::create([
                'name'            => $subject['name'],
                'comment'         => $subject['comment'],
                'opened'          => $subject['opened'],
                'subject_type_id' => $subject['subject_type_id'],
            ]);
        }
    }
}
