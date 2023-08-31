<?php

declare(strict_types=1);

namespace App;

interface Seed
{
    /**
     *  Retrieves the current line of the file.
     *
     * @return array<string,string>
     */
    public function current(): array;

    /**
     *  Retrieves the current lines of the file and moves ahead to the line
     *  of the last data
     *
     * @return array<array<string,string>>
     */
    public function currents(int $count): array;

    /**
     *  Moves ahead to the next line in the file.
     */
    public function next(): void;

    /**
     *  Rewinds the file back to the first line.
     */
    public function rewind(): void;

    /**
     *  Seek to specified line in the file.
     */
    public function seek(int $line_pos): void;

    /**
     * Gets the current line number.
     */
    public function key(): int;

    /**
     *  Determine whether the end of file has been reached
     */
    public function eof(): bool;

    /**
     *  Check whether EOF has been reached.
     */
    public function valid(): bool;
}
