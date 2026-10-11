
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Beranda publik
|--------------------------------------------------------------------------
| Pengunjung bisa membuka halaman ini tanpa login.
*/
Route::get('/', function () {
    return view('beranda');
})->name('home');

/*
|--------------------------------------------------------------------------
| Login dan Register
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'showLogin'])
        ->name('login');

    Route::post('/login', [AuthController::class, 'login'])
        ->name('login.process');

    Route::get('/register', [AuthController::class, 'showRegister'])
        ->name('register');

    Route::post('/register', [AuthController::class, 'register'])
        ->name('register.process');
    Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])
    ->name('password.request');

    Route::post('/forgot-password', [AuthController::class, 'sendResetLink'])
        ->name('password.email');

    Route::get('/reset-password/{token}', [AuthController::class, 'showResetPassword'])
        ->name('password.reset');

    Route::post('/reset-password', [AuthController::class, 'resetPassword'])
        ->name('password.update');
});

/*
|--------------------------------------------------------------------------
| Halaman setelah login
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/beranda', function () {
        return redirect()->route('dashboard');
    })->name('beranda');

    Route::get('/cari-barang', function () {
        return 'Halaman Cari Barang akan dibuat berikutnya.';
    })->name('barang.cari');

    Route::get('/barang-hilang', function () {
        return 'Halaman Barang Hilang akan dibuat berikutnya.';
    })->name('barang.hilang');

    Route::get('/barang-ditemukan', function () {
        return 'Halaman Barang Ditemukan akan dibuat berikutnya.';
    })->name('barang.ditemukan');

    Route::get('/laporkan-barang', function () {
        return 'Halaman Laporan Barang akan dibuat berikutnya.';
    })->name('barang.laporkan');

    Route::post('/logout', [AuthController::class, 'logout'])
        ->name('logout');
});

