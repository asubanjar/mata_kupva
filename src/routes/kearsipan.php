<?php

declare(strict_types=1);

use App\Http\Controllers\Kearsipan\Registrasi\NotaDinasController;
use App\Http\Controllers\Kearsipan\Registrasi\PermohonanSTController;
use App\Http\Controllers\Kearsipan\Registrasi\SuratDinasController;
use Illuminate\Support\Facades\Route;

Route::prefix('kearsipan')->group(function (): void {
        Route::resource('registrasi/nota-dinas', NotaDinasController::class);

        Route::resource('registrasi/surat-dinas', SuratDinasController::class);

        Route::resource('registrasi/permohonan-st', PermohonanSTController::class);
});
