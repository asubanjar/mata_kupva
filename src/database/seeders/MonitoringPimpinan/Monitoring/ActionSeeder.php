<?php

namespace Database\Seeders\MonitoringPimpinan\Monitoring;

use App\Models\Master\Jabatan;
use App\Models\MonitoringPimpinan\Monitoring\Action;
use App\Models\MonitoringPimpinan\Monitoring\SubjectDetail;
use Illuminate\Database\Seeder;

class ActionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actions = [
            [
                'name'              => 'Sarpras',
                'comment'           => 'Perbaikan sarpras',
                'start'             => '2021-09-13 00:00:00.000',
                'end'               => '2024-09-13 00:00:00.000',
                'subject_detail_id' => SubjectDetail::where('name', 'Toiletry')->first()->id,
                'jabatan_id'        => Jabatan::where('name', 'BIRU')->first()->id,
            ],
            [
                'name'              => 'Pengadaan',
                'comment'           => 'Pengadaan perangkat toilet',
                'start'             => '2021-09-13 00:00:00.000',
                'end'               => '2023-09-13 00:00:00.000',
                'subject_detail_id' => SubjectDetail::where('name', 'Toiletry')->first()->id,
                'jabatan_id'        => Jabatan::where('name', 'BIRU')->first()->id,
            ],
            [
                'name'              => 'Anggaran',
                'comment'           => 'Perencanaan anggaran pengadaan perangkat toilet',
                'start'             => '2021-09-13 00:00:00.000',
                'end'               => '2023-09-13 00:00:00.000',
                'subject_detail_id' => SubjectDetail::where('name', 'Toiletry')->first()->id,
                'jabatan_id'        => Jabatan::where('name', 'BINCANG')->first()->id,
            ],
        ];

        foreach ($actions as $action) {
            Action::create([
                'name'              => $action['name'],
                'comment'           => $action['comment'],
                'start'             => $action['start'],
                'end'               => $action['end'],
                'subject_detail_id' => $action['subject_detail_id'],
                'jabatan_id'        => $action['jabatan_id'],
            ]);
        }
    }
}
