<?php

use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProjectController::class, 'landing'])->name('landing');
Route::get('/portfolio', [ProjectController::class, 'allProjects'])->name('portfolio.all');

// Admin Login Routes
Route::prefix('admin')->middleware('guest')->group(function () {
    Route::get('/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

Route::prefix('admin')->middleware('auth')->group(function () {
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
    Route::get('/dashboard', [ProjectController::class, 'dashboard'])->name('dashboard');
    Route::resource('projects', ProjectController::class);
});

require __DIR__.'/auth.php';
