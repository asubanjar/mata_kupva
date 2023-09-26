<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

    Route::group([], base_path('routes/monitoring.php'));

    Route::group([], base_path('routes/master.php'));
});
