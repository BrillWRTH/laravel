<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Beranda sebelum login
Route::get('/beranda', function () {
    return view('beranda', [
        'isLoggedIn' => false
    ]);
})->name('beranda');

// Beranda sesudah login
Route::get('/beranda-login', function () {
    return view('beranda', [
        'isLoggedIn' => true
    ]);
})->name('beranda.login');

Route::get('/keranjang', function () {
    return view('keranjang');
})->name('keranjang');

Route::get('/pembayaran', function () {
    return view('pembayaran');
})->name('pembayaran');

Route::get('/cek-pesanan', function () {
    return view('cek-pesanan');
})->name('cek-pesanan');