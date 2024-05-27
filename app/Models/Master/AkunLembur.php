<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\AkunLemburFactory factory(...$parameters)
 */
class AkunLembur extends Model
{
    use HasUuids;

    protected $fillable = [
        'kode',
        'nama',
        'jenis',
        'tahun',
    ];

    protected array $searchable = [
        'kode',
        'nama',
        'tahun',
    ];
}
