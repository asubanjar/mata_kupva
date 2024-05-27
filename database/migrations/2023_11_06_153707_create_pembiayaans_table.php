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
        Schema::create('pembiayaans', function (Blueprint $table): void {
            $table->uuid('id')->primary();
            $table->uuid('surat_tugas_id');
            $table->string('kode_akun');
            $table->string('nama_akun');
            $table->string('pagu_anggaran');
            $table->string('perkiraan_anggaran');
            $table->string('realisasi');
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
        Schema::dropIfExists('pembiayaans');
    }
};
