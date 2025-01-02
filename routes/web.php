<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\ProdukController;

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

Route::get('/admin/pelanggan', [PelangganController::class, 'index']);

Route::get('/admin/pelanggan/edit/{id}', [PelangganController::class, 'edit'])->name('pelanggan.edit');
Route::post('/admin/pelanggan/update/{id}', [PelangganController::class, 'update'])->name('pelanggan.update');

Route::get('/admin/pelanggan/delete/{id}', [PelangganController::class, 'destroy'])->name('pelanggan.destroy');


Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin/login', [AdminAuthController::class, 'loginAdmin']);
Route::get('/admin/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');


Route::get('/admin/produk', [ProdukController::class, 'index'])->name('admin.produk');

Route::get('/admin/produk/create', [ProdukController::class, 'create'])->name('admin.produk.create');
Route::post('/admin/produk', [ProdukController::class, 'store'])->name('admin.produk.store');

Route::get('/admin/produk/{id}/edit', [ProdukController::class, 'edit'])->name('admin.produk.edit');
Route::put('/admin/produk/{id}', [ProdukController::class, 'update'])->name('admin.produk.update');

Route::delete('/admin/produk/{id}', [ProdukController::class, 'destroy'])->name('admin.produk.destroy');






