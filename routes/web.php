<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AssetReportController;

// Middleware untuk tamu (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/', [AuthController::class, 'login'])->name('login');
});

// Middleware untuk pengguna yang sudah login (auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Kelompok route aset
    // Pilihan utama aset
    Route::get('/aset', [AssetController::class, 'index'])->name('aset.index');

    // Rute untuk Intra Kompatabel
    Route::prefix('aset/intra')->group(function () {
        Route::get('/', [AssetController::class, 'intra'])->name('aset.intra');
        Route::get('/create', [AssetController::class, 'createIntra'])->name('aset.intra.create');
        Route::post('/store', [AssetController::class, 'storeIntra'])->name('aset.intra.store');
        Route::get('/{id}/edit', [AssetController::class, 'editIntra'])->name('aset.intra.edit');
        Route::put('/{id}', [AssetController::class, 'updateIntra'])->name('aset.intra.update');
        Route::delete('/{id}', [AssetController::class, 'destroyIntra'])->name('aset.intra.destroy');
    });

    // Rute untuk Ekstra Kompatabel
    Route::prefix('aset/ekstra')->group(function () {
        Route::get('/', [AssetController::class, 'ekstra'])->name('aset.ekstra');
        Route::get('/create', [AssetController::class, 'createEkstra'])->name('aset.ekstra.create');
        Route::post('/store', [AssetController::class, 'storeEkstra'])->name('aset.ekstra.store');
        Route::get('/{id}/edit', [AssetController::class, 'editEkstra'])->name('aset.ekstra.edit');
        Route::put('/{id}', [AssetController::class, 'updateEkstra'])->name('aset.ekstra.update');
        Route::delete('/{id}', [AssetController::class, 'destroyEkstra'])->name('aset.ekstra.destroy');
    });

    // Profil
    Route::get('/profil', [AuthController::class, 'profil'])->name('profil');
    Route::post('/profile/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    // Laporan
    Route::get('/laporan/download', [AssetReportController::class, 'downloadPDF'])->name('laporan.download');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
