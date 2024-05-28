<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAhuOnlineTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('ahu_online', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_kegiatan');
            $table->string('pemegang_saham');
            $table->string('nama_perseroan');
            $table->string('nama_singkat');
            $table->string('alamat_perseroan');
            $table->string('provinsi');
            $table->string('kabupaten');
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
        Schema::dropIfExists('ahu_online');
    }
}