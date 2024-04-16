<?php

declare(strict_types=1);

namespace App\Models\Master;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $casts = ['is_active' => 'boolean'];

    protected $fillable = [
        'parent_id',
        'code',
        'name',
        'description',
        'retensi_tahun_aktif',
        'retensi_tahun_inaktif',
        'susut_id',
        'is_active',
        'keterangan_active',
        'keterangan_inactive',
    ];
}
