<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AhuOnline extends Model
{
    use HasFactory;

    protected $table = 'ahu_online';

    protected $fillable = [
        'jenis_kegiatan',
        'pemegang_saham',
        'nama_perseroan',
        'nama_singkat',
        'alamat_perseroan',
        'provinsi',
        'kabupaten',
    ];
}