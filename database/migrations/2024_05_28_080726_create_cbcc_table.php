<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCbccTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cbcc', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pembawa');
            $table->string('nomor_identitas');
            $table->string('alamat');
            $table->string('provinsi');
            $table->string('kabupaten');
            $table->string('jenis_valuta_asing');
            $table->decimal('jumlah_valuta_asing', 15, 2);
            $table->decimal('jumlah_rupiah', 15, 2);
            $table->string('negara_asal');
            $table->string('negara_tujuan');
            $table->date('tanggal_kedatangan');
            $table->string('tujuan_pembawaan');
            $table->string('kepemilikan');
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
        Schema::dropIfExists('cbcc');
    }
}