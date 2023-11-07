<?php

declare(strict_types=1);

namespace App\Models\Kearsipan\Registrasi;

use App\Models\Kearsipan\Registrasi\Pembiayaan;
use App\Models\Master\JenisKegiatan;
use App\Models\Master\JenisPerjadin;
use App\Models\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class SuratTugas extends Model
{
    use HasFactory;
    use HasUuids;

    protected $casts = [
        'tgl_nodis'    => 'datetime',
        'tgl_st_start' => 'datetime',
        'tgl_st_end'   => 'datetime',
    ];

    protected $fillable = [
        'user_id',
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

    protected static function booted(): void
    {
        static::creating(function (self $surat_tugas): void {
            if (!empty($surat_tugas->user_id)) {
                return;
            }

            $user = Auth::user() ?? new User();

            $surat_tugas->fill(['user_id' => $user->id]);
        });

        static::created(function (self $surat_tugas): void {
            $surat_tugas->syncOriginal();

            $surat_tugas->no_st = $surat_tugas->no_st;

            $surat_tugas->saveQuietly();
        });
    }

    public function generateCode(): string
    {
        $st = DB::table('surat_tugas')->latest('no_st')->whereNotNull('no_st')->first();

        if (!$st) {
            $codeNumber = 1;
        } else {
            $codeNumber = (int) explode('/', $st->no_st)[2] + 1;
        }

        return 'RT.01' . '/' . '01.1' . '/' . $codeNumber . '/' . date('Y');
    }

    public function getNoStAttribute(string $value = null): string
    {
        return $value ?: $this->generateCode();
    }

    public function namaKegiatan(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisKegiatan::class, 'nama_kegiatan_id');
    }

    public function jenisPerjadin(): Relations\BelongsTo
    {
        return $this->belongsTo(JenisPerjadin::class, 'jenis_perjadin_id');
    }

    public function pembiayaan(): Relations\HasMany
    {
        return $this->hasMany(Pembiayaan::class);
    }
}
