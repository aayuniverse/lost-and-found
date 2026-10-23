
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\LaporanController;
use App\Models\Laporan;

/*
|--------------------------------------------------------------------------
| Beranda publik
|--------------------------------------------------------------------------
*/
Route::get('/', function () {
    return view('beranda');
})->name('home');

/*
|--------------------------------------------------------------------------
| Login, Register, dan Reset Password
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

    // Dashboard
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Beranda setelah login
    Route::get('/beranda', function () {
        return redirect()->route('dashboard');
    })->name('beranda');

  
/*
/*
|--------------------------------------------------------------------------
| Daftar Barang Hilang
|--------------------------------------------------------------------------
*/
Route::get('/barang-hilang', function () {
    $laporan = Laporan::with('foto')
        ->where('jenis_laporan', 'Hilang')
        ->where('status', 'Dipublikasikan')
        ->latest()
        ->paginate(4);

    return view('barang-hilang', compact('laporan'));
})->name('barang.hilang');

/*
|--------------------------------------------------------------------------
| Daftar Barang Ditemukan
|--------------------------------------------------------------------------
*/
Route::get('/barang-ditemukan', function () {
    $laporan = \App\Models\Laporan::with('foto')
        ->where('jenis_laporan', 'Ditemukan')
        ->where('status', 'Dipublikasikan')
        ->latest()
        ->paginate(4);

    return view('barang-ditemukan', compact('laporan'));
})->name('barang.ditemukan');

    /*
    |--------------------------------------------------------------------------
    | Pilihan Jenis Laporan
    |--------------------------------------------------------------------------
    */
    Route::get('/pilih-laporan', function () {
        return view('pilih-laporan');
    })->name('laporkan.pilih');

    Route::get('/laporkan-barang', function () {
        return redirect()->route('laporkan.pilih');
    })->name('barang.laporkan');

    /*
    |--------------------------------------------------------------------------
    | Form dan Penyimpanan Laporan Barang Hilang
    |--------------------------------------------------------------------------
    */
    Route::get('/laporkan-barang-hilang', function () {
        return view('laporkan-hilang');
    })->name('laporkan.hilang');

    Route::post('/laporkan-barang-hilang', [
        LaporanController::class,
        'simpanHilang',
    ])->name('laporkan.hilang.simpan');

    /*
    |--------------------------------------------------------------------------
    | Form dan Penyimpanan Laporan Barang Ditemukan
    |--------------------------------------------------------------------------
    */
    Route::get('/laporkan-barang-ditemukan', function () {
        return view('laporkan-ditemukan');
    })->name('laporkan.ditemukan');

    Route::post('/laporkan-barang-ditemukan', [
        LaporanController::class,
        'simpanDitemukan',
    ])->name('laporkan.ditemukan.simpan');

    /*
|--------------------------------------------------------------------------
| Verifikasi Laporan oleh TU
|--------------------------------------------------------------------------
*/
Route::middleware('role.tu')->group(function () {
    Route::patch('/tu/laporan/{id}/setujui', [
        LaporanController::class,
        'setujui',
    ])->name('tu.laporan.setujui');

    Route::patch('/tu/laporan/{id}/tolak', [
        LaporanController::class,
        'tolak',
    ])->name('tu.laporan.tolak');
});

    /*
    |--------------------------------------------------------------------------
    | Logout
    |--------------------------------------------------------------------------
    */
    Route::post('/logout', [
        AuthController::class,
        'logout',
    ])->name('logout');
});
