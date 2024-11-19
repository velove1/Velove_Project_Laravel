<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeConrtoller;

// Route::get('/', function () {
//    return view('index'); // menuju ke file welcome.blade.php
// });

// Route::get('/login', function () {
    // return view('login'); // menuju ke file welcome.blade.php
// });

Route::get('/welcome', function () {
     return view('welcome'); // menuju ke file welcome.blade.php
});

// Route::get('/about', function () {
    // return view('about'); // menuju ke file text about
// });

Route::get('/', [HomeConrtoller::class, 'index'])->name('home');
Route::get('/login', [HomeConrtoller::class, 'login'])->name('login');
Route::get('/about', [HomeConrtoller::class, 'about'])->name('about');
Route::get('/gallery', [HomeConrtoller::class, 'gallery'])->name('gallery');