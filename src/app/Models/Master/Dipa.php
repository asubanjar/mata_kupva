<?php

declare(strict_types=1);

namespace App\Models\Master;

use App\Models\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\DipaFactory factory(...$parameters)
 */
class Dipa extends Model
{
    use Uuids;

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
