<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanKupva extends Model
{
    use HasFactory;

    protected $table = 'laporan_kupva';

    protected $fillable = [
        'sandi_kupva',
        'nama_kupva',
        'tahun',
        'bulan',
        'jenis_produk',
        'jenis_valuta',
        'saldo_awal_valas',
        'saldo_awal_rupiah',
        'volume_pembelian_valas',
        'volume_pembelian_rupiah',
        'volume_penjualan_valas',
        'volume_penjualan_rupiah',
        'saldo_akhir',
        'nilai_kurs',
        'saldo_akhir_rupiah',
    ];
}