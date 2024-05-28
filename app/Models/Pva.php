<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pva extends Model
{
    use HasFactory;

    protected $table = 'pva';

    protected $fillable = [
        'nama_pva',
        'pemegang_saham',
        'jumlah_aset',
        'catatan_kasus',
        'flag_anomali_transaksi',
        'tingkat_kepatuhan',
    ];
}