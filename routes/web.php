<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\KonservatorController;
use App\Http\Middleware\IsAdmin;

// Root & Landing Page
Route::get('/', function () {
    return view('index.index');
})->name('home');

Route::get('/index', function () {
    return view('index.index');
})->name('index');

// Auth Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
    Route::post('/register', [AuthController::class, 'register']);
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// Halaman Daftar Konservator (Publik)
Route::get('/daftar-konservator', [KonservatorController::class, 'index'])->name('konservator.index');

// Admin Dashboard Routes (Protected)
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::put('/admin/users/{id}', [AdminController::class, 'updateRole'])->name('admin.users.update');
    Route::delete('/admin/users/{id}', [AdminController::class, 'destroy'])->name('admin.users.destroy');
});
// Asesmen
Route::get('/asesmen', function () {
    return view('asesmen.asesmen');
})->name('asesmen');

// Analisis & Proses Analisis
Route::get('/analisis', function () {
    return view('analisis.analisis');
})->name('analisis');

Route::get('/proses-analisis', function () {
    return view('proses_analisis.proses_analisis');
})->name('proses-analisis');

// Hasil Diagnosa
Route::get('/hasil-diagnosa', function () {
    return view('hasil_diagnosa.hasil_diagnosa');
})->name('hasil-diagnosa');

// Form Jasa Konservator
Route::get('/form-jasa-konservator', function () {
    return view('form_jasa_konservator.form_jasa_konservaror');
})->name('form-jasa-konservator');

// Konsultasi Konservator & Hasil
Route::get('/konsultasi-konservator', function () {
    return view('konsultasi_konservator.konsultasi_konservator');
})->name('konsultasi-konservator');

Route::get('/hasil-konsultasi-konservator', function (Request $request) {
    return view('hasil_konsultasi_konservator.hasil_konsultasi_konservator');
})->name('hasil-konsultasi-konservator');

// Order Konservator
Route::get('/order-konservator', function () {
    return view('order_konservator.order_konservator');
})->name('order-konservator');

// NDA
Route::get('/nda', function () {
    return view('nda.nda');
})->name('nda');

// Katalog
Route::get('/katalog', function () {
    return view('katalog.katalog');
})->name('katalog');
