<?php

declare(strict_types=1);

namespace App\Models\Kearsipan\Registrasi;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class TanggalTugas extends Model
{
    use HasFactory;
    use HasUuids;

    protected $casts = ['tanggal' => 'datetime'];

    protected $fillable = [
        'surat_tugas_id',
        'tanggal',
    ];

    public function suratTugas(): Relations\BelongsTo
    {
        return $this->belongsTo(SuratTugas::class, 'surat_tugas_id');
    }

    public function peserta(): Relations\BelongsToMany
    {
        return $this->belongsToMany(Peserta::class);
    }
}
