<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLaporanKupvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('laporan_kupva', static function (Blueprint $table): void {
            $table->id();
            $table->string('sandi_kupva');
            $table->string('nama_kupva');
            $table->year('tahun');
            $table->string('bulan');
            $table->string('jenis_produk');
            $table->string('jenis_valuta');
            $table->decimal('saldo_awal_valas', 15, 2);
            $table->decimal('saldo_awal_rupiah', 15, 2);
            $table->decimal('volume_pembelian_valas', 15, 2);
            $table->decimal('volume_pembelian_rupiah', 15, 2);
            $table->decimal('volume_penjualan_valas', 15, 2);
            $table->decimal('volume_penjualan_rupiah', 15, 2);
            $table->decimal('saldo_akhir', 15, 2);
            $table->decimal('nilai_kurs', 15, 2);
            $table->decimal('saldo_akhir_rupiah', 15, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan_kupva');
    }
}