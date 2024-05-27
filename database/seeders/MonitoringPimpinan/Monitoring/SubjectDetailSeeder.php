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
                'name'       => 'Tersedianya basis data',
                'comment'    => 'Tersedianya basis data yang dapat digunakan dalam mendukung PPATK sebagai financial intelligence centre.',
                'start'      => '2023-09-25 00:00:00.000',
                'end'        => '2024-09-25 00:00:00.000',
                'subject_id' => Subject::where('name', 'Resolusi Kerja Hebat (ROKET) - RAJA 2023')->first()->id,
            ],
            [
                'name'       => 'Terlaksananya pola kerja baru',
                'comment'    => 'Terlaksananya pola kerja baru dengan memaksimalkan data PPATK untuk membangun kasus sistemik.',
                'start'      => '2023-09-25 00:00:00.000',
                'end'        => '2024-09-25 00:00:00.000',
                'subject_id' => Subject::where('name', 'Resolusi Kerja Hebat (ROKET) - RAJA 2023')->first()->id,
            ],
            [
                'name'       => 'Terbangunnya networking',
                'comment'    => 'Terbangunnya networking berorientasi core PPATK dan dukungan oversight BPK dan Komite TPPU.',
                'start'      => '2023-09-25 00:00:00.000',
                'end'        => '2024-09-25 00:00:00.000',
                'subject_id' => Subject::where('name', 'Resolusi Kerja Hebat (ROKET) - RAJA 2023')->first()->id,
            ],
            [
                'name'       => 'Termanfaatkannya public view',
                'comment'    => 'Termanfaatkannya public view yang mendukung core ppatk dan strategi public relation APU PPT yang unggul.',
                'start'      => '2023-09-25 00:00:00.000',
                'end'        => '2024-09-25 00:00:00.000',
                'subject_id' => Subject::where('name', 'Resolusi Kerja Hebat (ROKET) - RAJA 2023')->first()->id,
            ],
            [
                'name'       => 'Tersedianya human capital, sarana dan prasarana, kelembagaan, informasi teknogi, dan pengawasan internal',
                'comment'    => 'Tersedianya human capital, sarana dan prasarana, kelembagaan, informasi teknogi, dan pengawasan internal yang mendukung tugas dan fungsi PPATK.',
                'start'      => '2023-09-25 00:00:00.000',
                'end'        => '2024-09-25 00:00:00.000',
                'subject_id' => Subject::where('name', 'Resolusi Kerja Hebat (ROKET) - RAJA 2023')->first()->id,
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
