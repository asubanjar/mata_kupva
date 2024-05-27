<?php

declare(strict_types=1);

namespace App\Models\Master;

use Database\Factories\Master\JenisKegiatanFactory;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/** @method static JenisKegiatanFactory factory(...$parameters) */
class JenisKegiatan extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama',
        'keterangan',
    ];

    protected array $searchable = [
        'nama',
        'keterangan',
    ];
}
