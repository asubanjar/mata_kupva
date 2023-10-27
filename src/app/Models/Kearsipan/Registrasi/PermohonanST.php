<?php

declare(strict_types=1);

namespace App\Models\Kearsipan\Registrasi;

use App\Models\Master\JenisKegiatan;
use App\Models\Master\JenisPerjadin;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;

class PermohonanST extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'surat_tugases';

    protected $casts = [

        'tgl_nodis'    => 'datetime',
        'tgl_st_start' => 'datetime',
        'tgl_st_end'   => 'datetime',
    ];

    protected $fillable = [
        'unit_kerja',
        'no_nodis',
        'tgl_nodis',
        'perihal_nodis',
        'dasar_penugasan',
        'detail_penugasan',
        'nama_kegiatan_id',
        'detail_kegiatan',
        'jenis_perjadin_id',
        'jenis_transportasi',
        'jenis_pembiayaan',
        'target_kinerja',
        'nama_kota',
        'tgl_st_start',
        'tgl_st_end',
    ];

    public function jenisKegiatan(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisKegiatan::class, 'nama_kegiatan_id');
    }

    public function jenisPerjadin(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisPerjadin::class, 'jenis_perjadin_id');
    }
}
