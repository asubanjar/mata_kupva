<?php

declare(strict_types=1);

use App\Http\Controllers\MonitoringPimpinan\DashboardController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\ActionCheckController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\ActionCheckStoreController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\ActionController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\CheckController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\CheckFinishController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailActionController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailActionStoreController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\SubjectDetailStoreController;
use App\Http\Controllers\MonitoringPimpinan\Monitoring\Upload\SubjectUploadController;
use App\Http\Controllers\MonitoringPimpinan\Statistic\ActionController as StatisticActionController;
use Illuminate\Support\Facades\Route;

Route::prefix('monitoring-pimpinan')->group(function (): void {
        Route::resource('dashboard', DashboardController::class)->only('index');

        Route::resource('statistic/action', StatisticActionController::class)->only('index');

        Route::resource('monitoring/subject', SubjectController::class);

        Route::resource('monitoring/subject-detail', SubjectDetailController::class);

        Route::resource('monitoring/action', ActionController::class)->only('index', 'update', 'destroy');

        Route::resource('monitoring/check', CheckController::class);

        Route::put(
            'monitoring/subject-detail/{subject_detail}/action',
            SubjectDetailActionController::class
        )->name('subject-detail.action');

        Route::post(
            'monitoring/subject-detail/{subject_detail}/action',
            SubjectDetailActionStoreController::class
        )->name('subject-detail-store.action');

        Route::get(
            'monitoring/check/{check}/{status}',
            CheckFinishController::class
        )->name('monitoring.check.finish');

        Route::post(
            'monitoring/action/{action}/check',
            ActionCheckStoreController::class
        )->name('monitoring.action-store.check');

        Route::post(
            'monitoring/subject/{subject}/subject-detail',
            SubjectDetailStoreController::class
        )->name('monitoring.subject-detail-store.subject');

        Route::get(
            'monitoring/subject/action/{action}/check',
            ActionCheckController::class
        )->name('monitoring.subject-action.check');

        Route::post(
            'monitoring/upload/subject/{uniqid}',
            SubjectUploadController::class
        )->name('monitoring.upload.subject');
});
