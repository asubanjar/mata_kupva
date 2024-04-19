<?php

declare(strict_types=1);

namespace App\Models\Kearsipan;

use App\Models\Master\JenisNaskah;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\SoftDeletes;

class KonsepNaskah extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $fillable = [
        'nid',
        'gir_id',
        'jenis_naskah_code',
        'jumlah_lampiran',
        'satuan_unit_code',
        'sifat_code',
        'urgensi_code',
        'receiver_as',
        'classification_id',
        'jabatan_from_code',
        'jabatan_to_code',
        'jabatan_cc_code',
        'approve_people_id',
        'jenjang',
        'status_naskah',
        'registration_date',
        'hal',
        'tanggal_naskah',
        'created_by',
        'signer_name',
        'nomor_naskah',
        'location',
        'ttd_page',
        'signer_id',
        'data_x',
        'data_y',
        'data_w',
        'data_h',
        'note',
        'is_public',
        'no_st',
        'signer_quantity',
        'token',
    ];

    public function jenisNaskah(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisNaskah::class, 'jenis_naskah_code', 'code');
    }

    public function penandatangan(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'signer_id', 'id');
    }

    public function sifat(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisNaskah::class, 'sifat_code', 'code');
    }

    public function urgensi(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisNaskah::class, 'urgensi_code', 'code');
    }

    public function satuanUnit(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisNaskah::class, 'satuan_unit_code', 'code');
    }
}
