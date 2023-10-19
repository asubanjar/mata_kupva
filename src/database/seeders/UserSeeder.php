<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::unprepared('SET IDENTITY_INSERT users ON');

        $content = file_get_contents(__DIR__ . '/data/peopleupdate.csv');

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
            $people_array = [
                'id'            => $row['id'],
                'name'          => $row['name'],
                'username'      => $row['username'],
                'password'      => $row['password'],
                'position'      => $row['position'],
                'jabatan_code'  => $row['jabatan_code'],
                'group_id'      => $row['group_id'],
                'atasan_code'   => $row['atasan_code'],
                'nip'           => $row['nip'],
                'approval_name' => $row['approval_name'],
                'email'         => $row['email'],
                'nik'           => $row['nik'],
                'phone'         => $row['phone'],
                'golongan'      => $row['golongan'],
                'user_id'       => $row['user_id'],
            ];

            User::Create($people_array);

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
