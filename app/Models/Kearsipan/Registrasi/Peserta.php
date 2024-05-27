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
        'nama_peserta',
        'status_peserta',
        'instansi_peserta',
        'nip',
        'golongan',
        'jabatan',
        'unit_organisasi',
        'pembiayaan_anggaran',
    ];

    public function suratTugas(): Relations\BelongsTo
    {
        return $this->belongsTo(SuratTugas::class);
    }

    public function tanggalTugas(): Relations\BelongsToMany
    {
        return $this->belongsToMany(TanggalTugas::class);
    }

    public function pegawai(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'nama_peserta');
    }
}
