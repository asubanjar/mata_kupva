<?php

declare(strict_types=1);

use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\DetailPesertaController;
use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\PesertaController;
use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\SuratTugasPesertaController;
use App\Http\Controllers\Kearsipan\KotakKeluar\NaskahDinasController;
use App\Http\Controllers\Kearsipan\KotakMasuk\DisposisiController;
use App\Http\Controllers\Kearsipan\KotakMasuk\NaskahMasukEksternalController;
use App\Http\Controllers\Kearsipan\KotakMasuk\NaskahMasukInternalController;
use App\Http\Controllers\Kearsipan\Registrasi\NotaDinasController;
use App\Http\Controllers\Kearsipan\Registrasi\SuratDinasController;
use App\Http\Controllers\Kearsipan\Registrasi\SuratTugasController;
use Illuminate\Support\Facades\Route;

Route::prefix('kearsipan')->group(function (): void {
        Route::resource('registrasi/nota-dinas', NotaDinasController::class);

        Route::resource('registrasi/surat-dinas', SuratDinasController::class);

        Route::resource('registrasi/permohonan-st', SuratTugasController::class);

        Route::resource('kotak-masuk/disposisi', DisposisiController::class);
        Route::resource('kotak-masuk/naskah-masuk-internal', NaskahMasukInternalController::class);
        Route::resource('kotak-masuk/naskah-masuk-eksternal', NaskahMasukEksternalController::class);

        Route::resource('kotak-keluar/naskah-dinas', NaskahDinasController::class);
        Route::resource('kotak-keluar/surat-tugas', SuratTugasController::class);

        Route::get(
            'surat-tugas/{surat_tugas}/peserta',
            SuratTugasPesertaController::class
        )->name('kearsipan.surat-tugas.peserta');

        Route::post('surat-tugas/{suratTugas}/peserta', PesertaController::class . '@store')
        ->name('kearsipan.surat-tugas.peserta.store');

        Route::get('detail-peserta/{user}', DetailPesertaController::class)->name('kearsipan.detailpeserta');
});
