<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| AUTH USER
|--------------------------------------------------------------------------
*/

// Halaman login
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');

// Proses login ke database
Route::post('/login', [AuthController::class, 'login'])->name('login.proses');

// Halaman daftar
Route::get('/daftar', [AuthController::class, 'showDaftar'])->name('daftar');

// Proses daftar user masuk ke tabel users
Route::post('/daftar', [AuthController::class, 'daftar'])->name('daftar.proses');

// Halaman lupa password
Route::get('/lupa-password', function () {
    return view('lupa-password');
})->name('lupa.password');

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


/*
|--------------------------------------------------------------------------
| DASHBOARD USER
|--------------------------------------------------------------------------
*/

// Untuk sementara user baru belum ada hasil skrining, jadi screeningCount = 0
Route::get('/dashboard', function () {
    return view('dashboard', [
        'screeningCount' => 0
    ]);
})->middleware('auth')->name('dashboard');

Route::get('/deteksi', function () {
    return view('deteksi');
})->name('deteksi');

Route::get('/cara-kerja', function () {
    return view('cara-kerja');
})->name('cara-kerja');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/riwayat-skrining', function () {
    return view('riwayat');
})->name('riwayat-skrining');

Route::get('/pengaturan', function () {
    return view('pengaturan');
})->name('pengaturan');