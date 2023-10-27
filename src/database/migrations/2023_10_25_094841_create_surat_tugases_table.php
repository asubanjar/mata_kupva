<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('surat_tugases', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->string('user_id')->nullable();
            $table->string('unit_kerja');
            $table->string('no_nodis');
            $table->date('tgl_nodis');
            $table->text('perihal_nodis');
            $table->string('dasar_penugasan');
            $table->text('detail_penugasan');
            $table->uuid('nama_kegiatan_id');
            $table->text('detail_kegiatan');
            $table->uuid('jenis_perjadin_id');
            $table->string('jenis_transportasi');
            $table->string('jenis_pembiayaan');
            $table->text('target_kinerja');
            $table->string('nama_kota');
            $table->string('no_st')->nullable();
            $table->date('tgl_st_start');
            $table->date('tgl_st_end');
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('nama_kegiatan_id')->references('id')->on('jenis_kegiatans');
            $table->foreign('jenis_perjadin_id')->references('id')->on('jenis_perjadins');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('surat_tugases');
    }
};
