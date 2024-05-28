<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWatchlistTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('watchlist', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // diambil dari NER Putusan/ DTTOT
            $table->string('jabatan'); // Komisaris/ Direktur/ Pemegang Saham
            $table->string('nama_kupva');
            $table->boolean('teregistrasi_ahu'); // Boolean to indicate registration in AHU
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
        Schema::dropIfExists('watchlist');
    }
}