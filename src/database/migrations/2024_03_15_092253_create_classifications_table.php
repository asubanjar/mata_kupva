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
        Schema::create('classifications', static function (Blueprint $table): void {
            $table->id();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->string('code');
            $table->string('name');
            $table->string('description');
            $table->integer('retensi_tahun_aktif')
                ->default(0);
            $table->integer('retensi_tahun_inaktif')
                ->default(0);
            $table->string('susut_id');
            $table->boolean('is_active')
                ->default(true);
            $table->string('keterangan_active')
                ->nullable();
            $table->string('keterangan_inactive')
                ->nullable();
            $table->timestamps();

            $table->foreign('parent_id')
            ->references('id')
            ->on('classifications');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classifications');
    }
};
