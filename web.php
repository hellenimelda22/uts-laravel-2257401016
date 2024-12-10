<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;

// Route untuk halaman pendaftaran
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');

// Route untuk halaman login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {

    $nama = 'Helen Imeldasari'; 
    $nim = '2257401016';  
    $kelas = 'MI22A';  
    return view('home', compact('nim', 'nama', 'kelas'));
});

Route::get('/logout', function () {
    return redirect('/');
});
