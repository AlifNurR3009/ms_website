<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/index', function () {
    return view('index'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/product', function () {
    return view('product'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/about', function () {
    return view('about'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/contact', function () {
    return view('contact'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/login', function () {
    return view('login'); // Mengarah ke resources/views/index.blade.php
});


Route::get('/register', function () {
    return view('register'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/admin/home', function () {
    return view('admin/home'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/admin/produk', function () {
    return view('admin/produk'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/admin/pembelian', function () {
    return view('admin/pembelian'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/admin/pelanggan', function () {
    return view('admin/pelanggan'); // Mengarah ke resources/views/index.blade.php
});

Route::get('/admin/logout', function () {
    return view('admin/logout'); // Mengarah ke resources/views/index.blade.php
});


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/', function () {
    return view('index'); // Ganti 'home' dengan nama view yang sesuai
})->name('home'); // Beri nama pada rute

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/formpembelian', function () {
    return view('/formpembelian'); 
});



