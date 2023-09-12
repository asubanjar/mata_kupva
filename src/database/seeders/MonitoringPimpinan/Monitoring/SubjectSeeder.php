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
                'name'            => 'Note Taking 2021',
                'comment'         => 'Catatan kepala PPATK',
                'opened'          => '2021-09-11 00:00:00.000',
                'subject_type_id' => SubjectType::where('code_name', 'NOTETAKING')->first()->id,
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
