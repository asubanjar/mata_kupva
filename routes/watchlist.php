<?php

declare(strict_types=1);

use App\Http\Controllers\Watchlist\DashboardController;
use App\Http\Controllers\Watchlist\ActionCheckController;
use App\Http\Controllers\Watchlist\ActionCheckStoreController;
use App\Http\Controllers\Watchlist\ActionController;
use App\Http\Controllers\Watchlist\CheckController;
use App\Http\Controllers\Watchlist\CheckFinishController;
use App\Http\Controllers\Watchlist\SubjectAttachmentController;
use App\Http\Controllers\Watchlist\SubjectController;
use App\Http\Controllers\Watchlist\SubjectDetailActionController;
use App\Http\Controllers\Watchlist\SubjectDetailActionStoreController;
use App\Http\Controllers\Watchlist\SubjectDetailController;
use App\Http\Controllers\Watchlist\SubjectDetailStoreController;
use App\Http\Controllers\Watchlist\Statistic\ActionController as StatisticActionController;
use Illuminate\Support\Facades\Route;

Route::prefix('watchlist')->group(function (): void {
        Route::resource('dashboard', DashboardController::class)->only('index');

        Route::resource('statistic/action', StatisticActionController::class)->only('index');

        Route::resource('subject', SubjectController::class);

        Route::resource('subject-detail', SubjectDetailController::class);

        Route::resource('action', ActionController::class)->only('index', 'update', 'destroy');

        Route::resource('check', CheckController::class);

        Route::get('subject-attachment/{subject}', SubjectAttachmentController::class . '@index')
            ->name('subject-attachment.index');

        Route::post('subject-attachment/{subject}', SubjectAttachmentController::class . '@store')
            ->name('subject-attachment.store');

        Route::get('subject-attachment/{subject_attachment}/download', SubjectAttachmentController::class . '@show')
            ->name('subject-attachment.show');

        Route::resource('subject-attachment', SubjectAttachmentController::class)->only('destroy');

        Route::put(
            'subject-detail/{subject_detail}/action',
            SubjectDetailActionController::class
        )->name('subject-detail.action');

        Route::post(
            'subject-detail/{subject_detail}/action',
            SubjectDetailActionStoreController::class
        )->name('subject-detail-store.action');

        Route::get(
            'check/{check}/{status}',
            CheckFinishController::class
        )->name('check.finish');

        Route::post(
            'action/{action}/check',
            ActionCheckStoreController::class
        )->name('action-store.check');

        Route::post(
            'subject/{subject}/subject-detail',
            SubjectDetailStoreController::class
        )->name('subject-detail-store.subject');

        Route::get(
            'subject/action/{action}/check',
            ActionCheckController::class
        )->name('subject-action.check');
});