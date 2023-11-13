<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DeleteUploadController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
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

    Route::group([], base_path('routes/kearsipan.php'));

    Route::group([], base_path('routes/monitoring.php'));

    Route::group([], base_path('routes/user.php'));

    Route::group([], base_path('routes/master.php'));

    Route::post('upload/{uniqid}/{class}', UploadController::class);

    Route::post('upload-delete/{uniqid}/{class}', DeleteUploadController::class);
});
