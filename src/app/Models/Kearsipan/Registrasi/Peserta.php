<?php

declare(strict_types=1);

namespace App\Models\Kearsipan\Registrasi;

use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Peserta extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'surat_tugas_id',
        'pegawai_id',
        'unit_organisasi',
    ];

    public function suratTugas(): Relations\BelongsTo
    {
        return $this->belongsTo(SuratTugas::class, 'surat_tugas_id');
    }

    public function pegawai(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'pegawai_id');
    }
}
