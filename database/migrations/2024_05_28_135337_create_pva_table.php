<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePvaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('pva', function (Blueprint $table) {
            $table->id();
            $table->string('nama_pva');
            $table->string('pemegang_saham');
            $table->decimal('jumlah_aset', 15, 2);
            $table->integer('catatan_kasus');
            $table->boolean('flag_anomali_transaksi');
            $table->decimal('tingkat_kepatuhan', 5, 2); // Assuming percentage
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
        Schema::dropIfExists('pva');
    }
}