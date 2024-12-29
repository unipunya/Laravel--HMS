<?php

use App\Http\Controllers\AuthManager;
use App\Http\Controllers\ServiceManager;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', [ServiceManager::class, "index"])->name('home');

Route::get('login', [AuthManager::class, 'login'])->name('login');
Route::post('login', [AuthManager::class, 'loginPost'])->name('login.post');
Route::get('logout', [AuthManager::class, 'logout'])->name('logout');

Route::get('register', [AuthManager::class, 'register'])->name('register');
Route::post('register', [AuthManager::class, 'registerPost'])->name('register.post');

Route::get('/service/{slug}', [ServiceManager::class, "details"])->name('services.details');

// Protected Routes (Require Authentication)
Route::middleware('auth')->group(function () {
    Route::get('/booking', [ServiceManager::class, 'booking'])->name('booking');
    Route::get('/profile', [ProfileController::class, 'show'])->name('profile');

    // Profile Management
    Route::put('/profile/update-password', [ProfileController::class, 'updatePassword'])
        ->name('profile.update-password');
    Route::delete('/profile/delete', [ProfileController::class, 'deleteProfile'])
        ->name('profile.delete');
});
