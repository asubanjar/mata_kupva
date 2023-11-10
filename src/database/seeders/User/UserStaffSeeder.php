<?php

declare(strict_types=1);

namespace Database\Seeders\User;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

class UserStaffSeeder extends Seeder
{
    public function run(): void
    {
        DB::unprepared('SET IDENTITY_INSERT users ON');

        $content = file_get_contents(database_path('seeders/data/pegawai-staff.csv'));

        Assert::stringNotEmpty($content, 'Content invalid');

        $csvs = array_filter(explode("\n", $content));

        $header = str_getcsv(array_shift($csvs) ?? '', ';');

        $progress = $this->command->getOutput()->createProgressBar(count($csvs));

        $start = microtime(true);

        $progress->start();

        collect($csvs)->map(function ($row, $key) use ($header) {
            $combined = array_combine($header, str_getcsv($row, ';'));

            Assert::isArray($combined, 'Invalid data at:' . $key);

            return $combined;
        })->each(function ($row) use ($progress): void {
            $data_pegawai = DB::connection('pegawai')->table('v_tblpegawai')
            ->where('username', $row['username'])->first();

            $people_array = [
                'id'              => $row['id'],
                'name'            => $data_pegawai ? $data_pegawai->nama : $row['name'],
                'username'        => $row['username'],
                'unit_organisasi' => $data_pegawai ? $data_pegawai->unit_organisasi : null,
                'position'        => $data_pegawai ? $data_pegawai->jabatan : $row['position'],
                'unit_kerja'      => $row['unit_kerja'] !== '' ? $row['unit_kerja'] : null,
                'jabatan_code'    => $row['jabatan_code'],
                'group_id'        => $row['group_id'],
                'atasan_code'     => $row['atasan_code'],
                'nip'             => $data_pegawai ? $data_pegawai->nip : $row['nip'],
                'approval_name'   => $data_pegawai ? $data_pegawai->nama : $row['approval_name'],
                'email'           => $row['email'],
                'nik'             => $data_pegawai ? $data_pegawai->nik : $row['nik'],
                'phone'           => '6287812625858',
                'golongan'        => $data_pegawai ? $data_pegawai->golongan : $row['golongan'],
                'user_id'         => $row['user_id'],
                'active'          => $data_pegawai ? ($data_pegawai->status_pegawai === '1') : false,
                'simpeg_id'       => $data_pegawai ? $data_pegawai->id : null,
            ];

            $user = User::Create($people_array);

            $user->assignRole('Super_Admin');

            $progress->advance(1);
        });

        $progress->finish();

        $duration = (microtime(true) - $start) / 60;

        $this->command->getOutput()->newLine();
        $this->command->getOutput()->writeln('Done in ' . number_format($duration, 2) . 'min');
        $this->command->getOutput()->newLine(2);

        DB::unprepared('SET IDENTITY_INSERT users OFF');
    }
}
