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
        Schema::create('pesertas', static function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('surat_tugas_id');
            $table->string('nama_peserta');
            $table->string('status_peserta');
            $table->string('instansi_peserta');
            $table->string('nip');
            $table->string('golongan');
            $table->string('jabatan');
            $table->string('unit_organisasi');
            $table->string('pembiayaan_anggaran');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('surat_tugas_id')
            ->references('id')
            ->on('surat_tugas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesertas');
    }
};
