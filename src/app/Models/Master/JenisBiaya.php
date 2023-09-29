<?php

declare(strict_types=1);

namespace App\Models\Master;

use App\Models\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;

/**
 * @method static \Database\Factories\Master\JenisBiayaFactory factory(...$parameters)
 */
class JenisBiaya extends Model
{
    use Uuids;

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
