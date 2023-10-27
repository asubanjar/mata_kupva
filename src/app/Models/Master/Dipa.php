<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\DipaFactory factory(...$parameters)
 */
class Dipa extends Model
{
    use HasUuids;

    protected $fillable = [
        'kode',
        'tahun',
        'pembiayaan',
    ];

    protected array $searchable = [
        'kode',
        'tahun',
    ];
}
