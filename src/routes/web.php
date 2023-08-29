<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Master\UrgensiController;
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

Route::get('/logout', [LoginController::class, 'logout']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

//MENU MASTER
Route::prefix('master')->group(function (): void {
    Route::resource('urgensi', UrgensiController::class);
});
