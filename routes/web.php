<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/home', function () {
    return view('home'); // Mengarah ke resources/views/index.blade.php
});

