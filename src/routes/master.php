<?php

declare(strict_types=1);

use App\Http\Controllers\Master\AkunLemburController;
use App\Http\Controllers\Master\DipaController;
use App\Http\Controllers\Master\JenisBiayaController;
use App\Http\Controllers\Master\SifatController;
use App\Http\Controllers\Master\SubjectTypeController;
use App\Http\Controllers\Master\UrgensiController;
use Illuminate\Support\Facades\Route;

Route::prefix('master')->group(function (): void {
    Route::resource('akun-lembur', AkunLemburController::class);

    Route::resource('dipa', DipaController::class);

    Route::resource('jenis-biaya', JenisBiayaController::class);

    Route::resource('sifat', SifatController::class);

    Route::resource('subject-type', SubjectTypeController::class);

    Route::resource('urgensi', UrgensiController::class);
});
