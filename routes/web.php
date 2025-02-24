<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProfileController;

// Middleware untuk tamu (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});

// Middleware untuk pengguna yang sudah login (auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Perbaikan resource route untuk aset
    Route::resource('aset', AssetController::class)->names([
        'index'   => 'aset.index',
        'create'  => 'aset.create',
        'store'   => 'aset.store',
        'show'    => 'aset.show',
        'edit'    => 'aset.edit',
        'update'  => 'aset.update',
        'destroy' => 'aset.destroy',
    ]);

    Route::get('/profil', [AuthController::class, 'profil'])->name('profil');
    Route::post('/profile/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');

    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
