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
        'tanggal_tugas_id',
        'nama_peserta',
        'status_peserta',
        'instansi_peserta',
        'nip',
        'golongan',
        'jabatan',
        'unit_organisasi',
    ];

    public function tanggalTugas(): Relations\BelongsTo
    {
        return $this->belongsTo(TanggalTugas::class, 'tanggal_tugas_id');
    }

    public function pegawai(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'nama_peserta');
    }
}
