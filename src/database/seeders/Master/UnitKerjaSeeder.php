<?php

declare(strict_types=1);

namespace Database\Seeders\Master;

use App\Models\Master\UnitKerja;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Webmozart\Assert\Assert;

class UnitKerjaSeeder extends Seeder
{
    public function run(): void
    {
        DB::unprepared('SET IDENTITY_INSERT users ON');

        $content = file_get_contents(database_path('seeders/data/unit_kerja.csv'));

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
            $array = [
                'nama'       => $row['nama'],
                'alias'      => $row['alias'],
                'keterangan' => $row['keterangan'],
            ];

            UnitKerja::Create($array);

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
