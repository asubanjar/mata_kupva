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
        Schema::create('konsep_naskahs', static function (Blueprint $table): void {
            $table->string('id')->primary();
            $table->string('nid');
            $table->string('gir_id');
            $table->string('jenis_naskah_code');
            $table->integer('jumlah_lampiran')->nullable();
            $table->string('satuan_unit_code')->nullable();
            $table->string('sifat_code');
            $table->string('urgensi_code');
            $table->string('receiver_as');
            $table->unsignedBigInteger('classification_id');
            $table->string('jabatan_from_code');
            $table->string('jabatan_to_code');
            $table->string('jabatan_cc_code')->nullable();
            $table->unsignedBigInteger('approve_people_id');
            $table->string('jenjang');
            $table->string('status_naskah');
            $table->datetime('registration_date');
            $table->string('hal');
            $table->datetime('tanggal_naskah');
            $table->unsignedBigInteger('created_by');
            $table->string('signer_name')->nullable();
            $table->string('nomor_naskah');
            $table->string('location')->nullable();
            $table->string('ttd_page');
            $table->unsignedBigInteger('signer_id');
            $table->integer('data_x')->nullable();
            $table->integer('data_y')->nullable();
            $table->integer('data_w')->nullable();
            $table->integer('data_h')->nullable();
            $table->text('note')->nullable();
            $table->integer('is_public');
            $table->string('no_st')->nullable();
            $table->string('signer_quantity');
            $table->string('token')->nullable();
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('jenis_naskah_code')
            ->references('code')
            ->on('jenis_naskahs');

            $table->foreign('satuan_unit_code')
            ->references('code')
            ->on('satuan_units');

            $table->foreign('sifat_code')
            ->references('code')
            ->on('sifats');

            $table->foreign('urgensi_code')
            ->references('code')
            ->on('urgensis');

            $table->foreign('classification_id')
            ->references('id')
            ->on('classifications');

            $table->foreign('jabatan_from_code')
            ->references('code')
            ->on('jabatans');

            $table->foreign('approve_people_id')
            ->references('id')
            ->on('users');

            $table->foreign('created_by')
            ->references('id')
            ->on('users');

            $table->foreign('signer_id')
            ->references('id')
            ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('konsep_naskahs');
    }
};
