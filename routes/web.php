<?php

use App\Http\Controllers\Frontend\CoursesController;
use App\Http\Controllers\Frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
