<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('landing');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', function (Request $request) {
    $email = $request->email;
    $password = $request->password;

    return back()->with('success', 'Login berhasil dicoba');
})->name('login.submit');