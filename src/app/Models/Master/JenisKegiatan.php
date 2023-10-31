<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\JenisKegiatanFactory factory(...$parameters)
 */
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
