<?php

declare(strict_types=1);

namespace App;

use Illuminate\Database\ConnectionInterface;
use Illuminate\Database\Seeder as BaseSeeder;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Helper\ProgressBar;
use Webmozart\Assert\Assert;

use function array_filter;
use function config;
use function count;
use function is_integer;

/**
 * @codeCoverageIgnore
 */
class Seeder extends BaseSeeder
{
    protected int $batch = 300;

    protected ?string $connection = null;

    protected ?int $counter = null;

    protected ?ProgressBar $progress = null;

    protected bool $queryLog = false;

    protected string $table;

    protected string $title;

    public function setTable(string $table, string $connection = null): void
    {
        $this->table = $table;

        if ($connection) {
            $this->setConnection($connection);
        }
    }

    public function setConnection(string $connection): void
    {
        $this->connection = $connection;
    }

    public function seed(Seed $seed, ?int $count = null): void
    {
        $this->progressStart($count);

        $this->prepare();

        while ($seed->valid()) {
            $remaining = $this->getRemainingProgress();

            if ($remaining === 0) {
                break;
            }

            $data = array_filter($seed->currents($this->batch));

            $this->insertData($data);

            $this->progressAdvance(count($data));

            $seed->next();
        }

        $this->progressFinish();
    }

    public function sync(Seed $seed, string $header, ?int $count = null): void
    {
        $this->progressStart($count);

        while ($seed->valid()) {
            $remaining = $this->getRemainingProgress();

            if ($remaining === 0) {
                break;
            }

            $data = array_filter($seed->current());

            $this->syncData($data, $header);

            $this->progressAdvance(1);

            $seed->next();
        }

        $this->progressFinish();
    }

    public function getConnection(): ConnectionInterface
    {
        $connection = $this->connection ?: $this->getDefaultConnection();

        return DB::connection($connection);
    }

    /**
     * @throws \InvalidArgumentException
     */
    public function getTable(): string
    {
        Assert::notEmpty($this->table, 'Table has not been set');

        return $this->table;
    }

    public function setBatch(int $batch): void
    {
        $this->batch = $batch;
    }

    public function enableQueryLog(bool $value = true): void
    {
        $this->queryLog = $value;
    }

    protected function progressStart(?int $count): void
    {
        $this->counter = $count;

        if ($count) {
            $progress = $this->createProgressBar($count);

            $progress->start();

            $this->progress = $progress;
        }
    }

    protected function createProgressBar(int $count): ProgressBar
    {
        return $this->command->getOutput()->createProgressBar($count);
    }

    protected function progressAdvance(int $step): void
    {
        if (is_integer($this->counter)) {
            $this->counter = $this->counter - $step;
        }

        if ($this->progress) {
            $this->progress->advance($step);
        }
    }

    protected function getRemainingProgress(): ?int
    {
        return $this->counter;
    }

    protected function progressFinish(): void
    {
        if ($this->progress) {
            $this->command->getOutput()->newLine(2);

            $this->progress->finish();
        }
    }

    protected function getDefaultConnection(): string
    {
        return config('database.default');
    }

    /**
     * @param array<array<string,string>> $data
     */
    protected function insertData(array $data): void
    {
        $this->getConnection()->table($this->getTable())->insert($data);
    }

    /**
     * @param array<string,string> $data
     */
    protected function syncData(array $data, string $header): void
    {
        $key = Arr::only($data, $header);

        $this->getConnection()->table($this->getTable())->updateOrInsert($key, $data);
    }

    protected function prepare(): void
    {
        if (!$this->queryLog) {
            DB::disableQueryLog();
        }
    }

    public function identityInsert(string $value = 'ON'): void
    {
        if ($this->getDefaultConnection() === 'sqlsrv') {
            DB::unprepared('SET IDENTITY_INSERT ' . $this->getTable() . ' ' . $value);
        }
    }
}
