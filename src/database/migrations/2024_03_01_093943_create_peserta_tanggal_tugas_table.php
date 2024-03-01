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
        Schema::create('peserta_tanggal_tugas', static function (Blueprint $table): void {
            $table->id();
            $table->uuid('peserta_id');
            $table->uuid('tanggal_tugas_id');
            $table->timestamps();

            $table->foreign('peserta_id')
            ->references('id')
            ->on('pesertas')
            ->onDelete('cascade');

            $table->foreign('tanggal_tugas_id')
            ->references('id')
            ->on('tanggal_tugas')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_tanggal_tugas');
    }
};
