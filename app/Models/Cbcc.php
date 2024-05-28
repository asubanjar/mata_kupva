<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cbcc extends Model
{
    use HasFactory;

    protected $table = 'cbcc';

    protected $fillable = [
        'nama_pembawa',
        'nomor_identitas',
        'alamat',
        'provinsi',
        'kabupaten',
        'jenis_valuta_asing',
        'jumlah_valuta_asing',
        'jumlah_rupiah',
        'negara_asal',
        'negara_tujuan',
        'tanggal_kedatangan',
        'tujuan_pembawaan',
        'kepemilikan',
    ];
}