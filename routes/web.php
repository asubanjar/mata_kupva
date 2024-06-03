<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\About\AboutController;
use App\Http\Controllers\DeleteUploadController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Watchlist\WatchlistController;

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

Route::group(['middleware' => ['auth']], static function (): void {
    Route::get('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/watchlists', [WatchlistController::class, 'index'])->name('watchlists.index');
    Route::get('/watchlists/{watchlist}', [WatchlistController::class, 'show'])->name('watchlists.show');
    Route::get('/about', [AboutController::class, 'index'])->name('about.index');

    Route::group([], base_path('routes/user.php'));

    Route::post('upload/{uniqid}/{class}', UploadController::class);

    Route::post('upload-delete/{uniqid}/{class}', DeleteUploadController::class);
});