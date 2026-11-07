<?php

use App\Http\Controllers\Frontend\CoursesController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\InstructorsController;
use App\Http\Controllers\Frontend\StudentsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/courses', [CoursesController::class, 'index'])->name('courses');
Route::get('/instructors', [InstructorsController::class, 'index'])->name('instructors');

Route::prefix('student')->name('student.')->controller(StudentsController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/courses', 'courses')->name('courses');
    Route::get('/exams', 'exams')->name('exams');
    Route::get('/resources', 'resources')->name('resources');
    Route::get('/orders', 'orders')->name('orders');
    Route::get('/orders/details', 'orderDetails')->name('orders.details');
    Route::get('/notifications', 'notifications')->name('notifications');
    Route::get('/profile', 'profile')->name('profile');
    Route::get('/classroom', 'classroom')->name('classroom');
    Route::get('/exam-room', 'examRoom')->name('exam.room');
});
