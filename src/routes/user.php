<?php

declare(strict_types=1);

use App\Http\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

Route::resource('user', UserController::class);
