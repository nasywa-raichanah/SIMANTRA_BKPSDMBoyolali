<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssetController;

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('/', [AuthController::class, 'login'])->name('login');

Route::get('/profile', function () {
    return view('profil');
});

// Gunakan middleware auth untuk halaman yang membutuhkan login
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('/aset', AssetController::class);
    Route::get('/aset', function () {
        return view('aset.index');
    })->name('aset');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
