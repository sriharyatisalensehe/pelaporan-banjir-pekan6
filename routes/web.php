<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PetugasController;

// Halaman Utama Publik
Route::get('/', function () { return view('welcome'); })->name('home');

// Guest Routes (Belum Login)
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store']);
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store']);
});

// Protected Routes (Wajib Login / Middleware Auth)
Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
    
    // Form Pelaporan Banjir (Wajib Login)
    Route::get('/banjir/buat', function () { return view('banjir.create'); })->name('banjir.create');
    Route::post('/banjir/store', function () { return redirect()->route('home')->with('success', 'Laporan titik banjir berhasil dikirim ke posko darurat!'); })->name('banjir.store');

    // Dashboard Kelola Data Laporan (Khusus Admin/Petugas)
    Route::get('/banjir/kelola', function () { return "Dashboard Manajemen Data Laporan Banjir (Khusus Petugas)"; })->name('banjir.index');

    // Profil Pengguna
    Route::get('/profil', [PetugasController::class, 'profile'])->name('profile');
});