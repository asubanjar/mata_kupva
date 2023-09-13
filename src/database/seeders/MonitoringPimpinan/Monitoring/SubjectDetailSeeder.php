<?php

namespace Database\Seeders\MonitoringPimpinan\Monitoring;

use App\Models\MonitoringPimpinan\Monitoring\Subject;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Database\Seeder;

class SubjectDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subject_details = [
            [
                'name'       => 'Toiletry',
                'comment'    => 'Catatan terkait fasilitas pada toilet kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2024-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
            [
                'name'       => 'Gardening',
                'comment'    => 'Catatan terkait penghijauan kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2023-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
            [
                'name'       => 'Lobby',
                'comment'    => 'Catatan terkait lobby kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2023-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
            [
                'name'       => 'Fencing',
                'comment'    => 'Catatan terkait pagar kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2023-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
            [
                'name'       => 'Wall',
                'comment'    => 'Catatan terkait dinding kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2024-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
            [
                'name'       => 'Display',
                'comment'    => 'Catatan terkait display hiasan kantor PPATK',
                'start'      => '2021-09-13 00:00:00.000',
                'end'        => '2024-09-13 00:00:00.000',
                'subject_id' => Subject::where('name', 'Note Taking 2021')->first()->id,
            ],
        ];

        foreach ($subject_details as $subject_detail) {
            SubjectDetail::create([
                'name'       => $subject_detail['name'],
                'comment'    => $subject_detail['comment'],
                'start'      => $subject_detail['start'],
                'end'        => $subject_detail['end'],
                'subject_id' => $subject_detail['subject_id'],
            ]);
        }
    }
}
