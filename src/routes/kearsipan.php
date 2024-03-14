<?php

declare(strict_types=1);

use App\Http\Controllers\Kearsipan\HomeController;
use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\DetailPesertaController;
use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\PesertaController;
use App\Http\Controllers\Kearsipan\Kedinasan\Peserta\SuratTugasPesertaController;
use App\Http\Controllers\Kearsipan\KotakKeluar\NaskahDinasController;
use App\Http\Controllers\Kearsipan\KotakMasuk\DisposisiController;
use App\Http\Controllers\Kearsipan\KotakMasuk\NaskahMasukEksternalController;
use App\Http\Controllers\Kearsipan\KotakMasuk\NaskahMasukInternalController;
use App\Http\Controllers\Kearsipan\NaskahUploadController;
use App\Http\Controllers\Kearsipan\Registrasi\NotaDinasController;
use App\Http\Controllers\Kearsipan\Registrasi\SuratDinasController;
use App\Http\Controllers\Kearsipan\Registrasi\SuratTugasController;
use Illuminate\Support\Facades\Route;

Route::prefix('kearsipan')->group(static function (): void {
        Route::resource('home', HomeController::class);
        Route::resource('registrasi/nota-dinas', NotaDinasController::class);

        Route::resource('registrasi/surat-dinas', SuratDinasController::class);

        Route::resource('registrasi/permohonan-st', SuratTugasController::class);

        Route::resource('kotak-masuk/disposisi', DisposisiController::class);
        Route::resource('kotak-masuk/naskah-masuk-internal', NaskahMasukInternalController::class);
        Route::resource('kotak-masuk/naskah-masuk-eksternal', NaskahMasukEksternalController::class);

        Route::resource('kotak-keluar/naskah-dinas', NaskahDinasController::class);
        Route::resource('kotak-keluar/surat-tugas', SuratTugasController::class)->parameters(['surat-tugas' => 'suratTugas']);

        Route::get('/surat-tugas/{suratTugas}', SuratTugasController::class . '@show')->name('kearsipan.surat-tugas.show');

        Route::get(
            'surat-tugas/{suratTugas}/peserta',
            SuratTugasPesertaController::class,
        )->name('kearsipan.surat-tugas.peserta');

        Route::post('surat-tugas/{suratTugas}/peserta', PesertaController::class . '@store')
        ->name('kearsipan.surat-tugas.peserta.store');

        Route::resource('surat-tugas/peserta', PesertaController::class)->parameters(['peserta' => 'peserta']);

        Route::get('detail-peserta/{user}', DetailPesertaController::class)->name('kearsipan.detailpeserta');

        //UPLOAD
        Route::post('upload-naskah/{uniqid}/{type}', NaskahUploadController::class);
});
