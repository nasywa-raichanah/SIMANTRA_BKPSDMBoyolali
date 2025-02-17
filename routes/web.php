<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::get('/profile', function () {
    return view('profil');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/aset', function () {
    return view('aset');
})->name('aset');

Route::get('/logout', function () {
    return redirect('/');
})->name('logout');
