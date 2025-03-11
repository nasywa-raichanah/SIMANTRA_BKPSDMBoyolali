<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\AssetReportController;

// Middleware untuk tamu (guest)
Route::middleware(['guest'])->group(function () {
    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login.form');
    Route::post('/', [AuthController::class, 'login'])->name('login');
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login.form');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login');
});

Route::middleware(['auth:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/admin/aset', [AssetController::class, 'adminIndex'])->name('admin.index');
    // Rute untuk Intra Kompatabel
    Route::prefix('admin/asetintra')->group(function () {
        Route::get('/', [AssetController::class, 'adminIntra'])->name('admin.intra');
        Route::get('/create', [AssetController::class, 'createIntra'])->name('admin.intra.create');
        Route::post('/store', [AssetController::class, 'storeIntra'])->name('admin.intra.store');
        Route::get('/{id}/edit', [AssetController::class, 'editIntra'])->name('admin.intra.edit');
        Route::put('/{id}', [AssetController::class, 'updateIntra'])->name('admin.intra.update');
        Route::delete('/{id}', [AssetController::class, 'destroyIntra'])->name('admin.intra.destroy');
    });
    Route::prefix('admin/asetekstra')->group(function () {
        Route::get('/', [AssetController::class, 'adminEkstra'])->name('admin.ekstra');
        Route::get('/create', [AssetController::class, 'createEkstra'])->name('admin.ekstra.create');
        Route::post('/store', [AssetController::class, 'storeEkstra'])->name('admin.ekstra.store');
        Route::get('/{id}/edit', [AssetController::class, 'editEkstra'])->name('admin.ekstra.edit');
        Route::put('/{id}', [AssetController::class, 'updateEkstra'])->name('admin.ekstra.update');
        Route::delete('/{id}', [AssetController::class, 'destroyEkstra'])->name('admin.ekstra.destroy');
    });
    Route::get('/admin/laporan/download', [AssetReportController::class, 'downloadPDF'])->name('admin.laporan.download');

    Route::post('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');
});

// Middleware untuk pengguna yang sudah login (auth)
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Kelompok route aset
    // Pilihan utama aset
    Route::get('/aset', [AssetController::class, 'index'])->name('aset.index');

    // Rute untuk Intra Kompatabel
    Route::get('aset/intra', [AssetController::class, 'intra'])->name('aset.intra');

    // Rute untuk Ekstra Kompatabel
    Route::get('aset/ekstra', [AssetController::class, 'ekstra'])->name('aset.ekstra');

    // Profil
    Route::get('/profil', [AuthController::class, 'profil'])->name('profil');
    Route::post('/profile/update-photo', [ProfileController::class, 'updatePhoto'])->name('profile.updatePhoto');
    Route::post('/profile/update-password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    // Laporan
    Route::get('/laporan/download', [AssetReportController::class, 'downloadPDF'])->name('laporan.download');

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});
