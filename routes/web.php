<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;
Route::resource('products', ProductController::class);

// 1. Halaman Utama Frontend
Route::get('/', function () {
    return view('frontend');
})->name('frontend');

// 2. Tampilan Form Login (Akses GET)
Route::get('/login', function () {
    return view('login');
})->name('login');

// 3. Proses Validasi Keamanan Akun Login (Akses POST)
Route::post('/login-proses', function (Request $request) {
    // Tentukan EMAIL dan PASSWORD paten/rahasia Anda di sini
    $email_benar = 'admin@orbit.com';
    $password_benar = 'OrbitAdmin2026!'; // Buat password yang kuat

    // Ambil data yang diinput oleh pengguna di form login
    $input_email = $request->input('email');
    $input_password = $request->input('password');

    // Proses Pengecekan Akun
    if ($input_email === $email_benar && $input_password === $password_benar) {
        // Jika COCOK, izinkan masuk ke halaman admin
        return redirect()->route('admin')->with('sukses', 'Login Berhasil!');
    }

    // Jika SALAH, kembalikan ke halaman login dan kirim pesan error
    return redirect()->route('login')->with('gagal', 'Email atau Password salah! Akses ditolak.');
})->name('login.proses');

// 4. Halaman Dashboard Admin (Hanya bisa diakses jika lolos login)
Route::get('/admin', function () {
    return view('admin');
})->name('admin');
