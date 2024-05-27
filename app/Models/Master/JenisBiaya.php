<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\JenisBiayaFactory factory(...$parameters)
 */
class JenisBiaya extends Model
{
    use HasUuids;

    protected $fillable = [
        'nama',
        'pembiayaan',
        'keterangan',
    ];

    protected array $searchable = [
        'nama',
        'pembiayaan',
    ];
}
