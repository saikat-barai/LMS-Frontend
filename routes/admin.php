<?php

use App\Http\Controllers\Backend\ClassesController;
use App\Http\Controllers\Backend\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('admin')->name('admin.')->group(function () {
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('login.submit');
    });

    Route::middleware('admin.auth')->group(function () {
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('dashboard');
            Route::post('/logout', 'logout')->name('logout');
        });

        Route::controller(ClassesController::class)->prefix('classes')->name('classes.')->group(function () {
            Route::get('/', 'index')->name('index');
        });
    });
});
