<?php

use App\Http\Controllers\Backend\ClassesController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\InstructorsController;
use App\Http\Controllers\Backend\SubjectsController;
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
            Route::post('/', 'store')->name('store');
            Route::put('/{academicClass}', 'update')->name('update');
            Route::delete('/{academicClass}', 'destroy')->name('destroy');
        });

        Route::controller(SubjectsController::class)->prefix('subjects')->name('subjects.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/', 'store')->name('store');
            Route::put('/{subject}', 'update')->name('update');
            Route::delete('/{subject}', 'destroy')->name('destroy');
        });

        Route::controller(InstructorsController::class)->prefix('instructors')->name('instructors.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/', 'store')->name('store');
            Route::get('/{instructor}/edit', 'edit')->name('edit');
            Route::put('/{instructor}', 'update')->name('update');
            Route::delete('/{instructor}', 'destroy')->name('destroy');
        });
    });
});
