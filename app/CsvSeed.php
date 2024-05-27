<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;
use SplFileInfo;
use SplFileObject;
use Throwable;
use Webmozart\Assert\Assert;

use function array_combine;
use function array_map;
use function array_slice;
use function explode;
use function is_array;
use function is_string;
use function sizeof;
use function strcasecmp;

/**
 * @codeCoverageIgnore
 */
final class CsvSeed implements Seed
{
    protected int $defaultFlags = SplFileObject::READ_CSV | SplFileObject::SKIP_EMPTY;

    protected string $delimiter = ',';

    protected SplFileObject $file;

    /** @var string[] */
    protected array $columns = [];

    public function __construct(string $filePath, int $flags = 0)
    {
        $this->setFile($filePath);
        $this->setFlags($flags | $this->defaultFlags);
    }

    public function setFile(string $filePath): void
    {
        $file = new SplFileInfo($filePath);

        if ($file->getExtension() !== 'csv') {
            throw new InvalidArgumentException('File not a csv file');
        }

        if (!$file->isReadable()) {
            throw new InvalidArgumentException('File not readable');
        }

        $this->file = $file->openFile('r');
    }

    public function setFlags(int $flags): void
    {
        $this->file->setFlags($flags | SplFileObject::READ_CSV);
    }

    /** @return static */
    public function setDelimiter(string $delimiter): self
    {
        $this->delimiter = $delimiter;

        $this->file->setCsvControl($delimiter);

        return $this;
    }

    /**
     * @param string[] $columns
     *
     * @throws \InvalidArgumentException
     */
    public function setColumn(array $columns): void
    {
        Assert::isNonEmptyList($columns);

        $this->$columns = $columns;
    }

    /** @return array<string,string|null> */
    public function current(): array
    {
        $columns = $this->getColumns();

        $current = $this->file->current();

        if (is_string($current)) {
            $current = explode($this->delimiter, $current);
        }

        if (!is_array($current)) {
            return [];
        }

        $current = $this->mapNullValue($current);

        return $this->mapColumnAndData($columns, $current);
    }

    /**
     * @return string[]
     *
     * @throws \InvalidArgumentException
     */
    public function getColumns(): array
    {
        if (!empty($this->columns)) {
            return $this->columns;
        }

        $current = $this->file->current();

        $this->next();

        if (is_string($current)) {
            $current = explode($this->delimiter, $current);
        }

        Assert::notFalse($current, 'Current row is invalid');

        $this->columns = array_filter($current);

        return $this->columns;
    }

    /** @return array<array<string|null>> */
    public function currents(int $count): array
    {
        $data = [];

        while ($this->valid()) {
            $data[] = $this->current();

            if (sizeof($data) === $count) {
                break;
            }

            $this->next();
        }

        return $data;
    }

    public function next(): void
    {
        $this->file->next();
    }

    public function rewind(): void
    {
        $this->file->rewind();
    }

    public function seek(int $line_pos): void
    {
        $this->file->seek($line_pos);
    }

    public function key(): int
    {
        return $this->file->key();
    }

    public function eof(): bool
    {
        return $this->file->eof();
    }

    public function valid(): bool
    {
        return $this->file->valid();
    }

    /**
     * @param string[] $data
     *
     * @return array<int,string|null>
     */
    protected function mapNullValue(array $data): array
    {
        return array_map(fn ($value) => strcasecmp($value, 'NULL') === 0 ? null : $value, $data);
    }

    /**
     * @param string[]               $columns
     * @param array<int,string|null> $data
     *
     * @return array<string,string|null>
     */
    protected function mapColumnAndData(array $columns, array $data): array
    {
        try {
            $combined = array_combine($columns, array_slice($data, 0, sizeof($columns)));
        } catch (Throwable $th) {
            dump($columns, $data);

            throw $th;
        }

        Assert::notFalse($combined, 'Column and data missmatch');

        return $combined;
    }
}
