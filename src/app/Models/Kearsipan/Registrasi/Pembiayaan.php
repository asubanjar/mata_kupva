<?php

declare(strict_types=1);

namespace App\Models\Kearsipan\Registrasi;

use App\Models\Kearsipan\Registrasi\SuratTugas;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class Pembiayaan extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'surat_tugas_id',
        'kode_akun',
        'nama_akun',
        'pagu_anggaran',
        'perkiraan_anggaran',
        'realisasi',
    ];

    public function suratTugas(): Relations\BelongsTo
    {
        return $this->belongsTo(SuratTugas::class, 'surat_tugas_id');
    }
}
