<?php

declare(strict_types=1);

namespace App\Models\Master;

use App\Models\Kearsipan\Registrasi\PermohonanST;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @method static \Database\Factories\Master\JenisKegiatanFactory factory(...$parameters)
 */
class JenisPerjadin extends Model
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

    public function st(): BelongsTo
    {
        return $this->belongsTo(PermohonanST::class);
    }
}
