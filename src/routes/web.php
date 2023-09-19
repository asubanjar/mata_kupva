<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\DipaController;
use App\Http\Controllers\Master\SifatController;
use App\Http\Controllers\Master\SubjectTypeController;
use App\Http\Controllers\Master\UrgensiController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\ActionController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\CheckFinishController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailActionController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailActionStoreController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [LoginController::class, 'showLoginForm']);

Route::post('custom-login', [LoginController::class, 'customLogin'])->name('login.custom');

Auth::routes();

Route::group(['middleware' => ['auth']], function (): void {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //MONITORING PIMPINAN
    Route::prefix('monitoring-pimpinan')->group(function (): void {
        Route::resource('monitoring/subject', SubjectController::class);
        Route::resource('monitoring/subject-detail', SubjectDetailController::class);
        Route::resource('monitoring/action', ActionController::class);
        Route::put('monitoring/subject-detail/{subject_detail}/action', SubjectDetailActionController::class)->name('subject-detail.action');
        Route::post('monitoring/subject-detail/{subject_detail}/action', SubjectDetailActionStoreController::class)->name('subject-detail-store.action');
        Route::get('monitoring/check/{check}/{status}', CheckFinishController::class)->name('monitoring.check.finish');
    });

    //MENU MASTER
    Route::prefix('master')->group(function (): void {
        Route::resource('sifat', SifatController::class);
        Route::resource('subject-type', SubjectTypeController::class);
        Route::resource('urgensi', UrgensiController::class);
        Route::resource('dipa', DipaController::class);
    });
});
