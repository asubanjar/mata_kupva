<?php

declare(strict_types=1);

namespace App\Models\Kearsipan;

use App\Models\Master\Classification;
use App\Models\Master\JenisNaskah;
use App\Models\Master\SatuanUnit;
use App\Models\Master\Sifat;
use App\Models\Master\Urgensi;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Database\Eloquent\SoftDeletes;

use function explode;

class NaskahDinas extends Model
{
    use HasUuids;
    use SoftDeletes;

    protected $table = 'naskah_dinases';

    protected $casts = ['is_public' => 'boolean'];

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
        return $this->belongsTo(Sifat::class, 'sifat_code', 'code');
    }

    public function urgensi(): Relations\BelongsTo
    {
        return $this->belongsTo(Urgensi::class, 'urgensi_code', 'code');
    }

    public function satuanUnit(): Relations\BelongsTo
    {
        return $this->belongsTo(SatuanUnit::class, 'satuan_unit_code', 'code');
    }

    public function pengunggah(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function classification(): Relations\BelongsTo
    {
        return $this->belongsTo(Classification::class, 'classification_id', 'id');
    }

    public function posisiPersetujuan(): Relations\BelongsTo
    {
        return $this->belongsTo(User::class, 'approve_people_id', 'id');
    }

    public function naskahUtama(): Relations\BelongsTo
    {
        return $this->belongsTo(InboxAttachment::class, 'nid', 'nid')
            ->where('keterangan', 'outbox');
    }

    public function naskahLampiran(): Relations\HasMany
    {
        return $this->hasMany(InboxAttachment::class, 'nid', 'nid')
            ->where('keterangan', 'lampiran');
    }

    public function getTujuanAttribute()
    {
        if (! $this->jabatan_to_code) {
            return [];
        }

        $array = explode(',', $this->jabatan_to_code);

        foreach ($array as $key => $value) {
            $name = $this->jabatanPenerima($value);

            if ($name === null) {
                continue;
            }

            $array[$key] = $name->position;
        }

        return $array;
    }

    public function getTembusanAttribute(): array
    {
        if (! $this->jabatan_cc_code) {
            return [];
        }

        $array = explode(',', $this->jabatan_cc_code);

        foreach ($array as $key => $value) {
            $name = $this->jabatanPenerima($value);

            if ($name === null) {
                continue;
            }

            $array[$key] = $name->position;
        }

        return $array;
    }

    public static function jabatanPenerima(string $value)
    {
        return User::where(
            'jabatan_code',
            $value,
        )->where('group_id', '3')->first();
    }
}
