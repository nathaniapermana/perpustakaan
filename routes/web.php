<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

// Redirect awal ke login
Route::get('/', function () { return redirect('/login'); });

// Route Login & Auth
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'loginProses']);
Route::get('/logout', [AuthController::class, 'logout']);

// Route yang wajib Login (Middleware Auth)
Route::middleware(['auth'])->group(function () {
    
    // Dashboard
    Route::get('/dashboard', [AlatController::class, 'dashboard']);

    // Kelola Alat
    Route::get('/alat-daftar', [AlatController::class, 'kelolaAlat'])->name('alat.daftar');
    Route::get('/alat/tambah', [AlatController::class, 'tambahAlatView']);
    Route::post('/alat/simpan', [AlatController::class, 'simpanAlat']);
    Route::get('/alat/edit/{id}', [AlatController::class, 'editAlatView']);
    Route::post('/alat/update/{id}', [AlatController::class, 'updateAlat']);
    Route::get('/alat/hapus/{id}', [AlatController::class, 'hapusAlat'])->name('alat.hapus');

    // Kelola Kategori
    Route::get('/kategori', [KategoriController::class, 'index']);
    Route::get('/kategori/tambah', [KategoriController::class, 'tambahView']);
    Route::post('/kategori/simpan', [KategoriController::class, 'simpan']);
    Route::get('/kategori/edit/{id}', [KategoriController::class, 'editView']);
    Route::post('/kategori/update/{id}', [KategoriController::class, 'update']);
    Route::get('/kategori/hapus/{id}', [KategoriController::class, 'hapus']);

    // Kelola User
    Route::get('/user-daftar', [UserController::class, 'index']);
    Route::get('/user/tambah', [UserController::class, 'tambahView']);
    Route::post('/user/simpan', [UserController::class, 'simpan']); // <-- INI RUTE TUJUANNYA
    Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);

    // Kelola Peminjaman
    Route::get('/peminjaman', [AlatController::class, 'daftarPeminjaman']);
    Route::get('/peminjaman/kembali/{id}', [AlatController::class, 'kembalikanAlat']);
    Route::get('/peminjaman/tambah', [AlatController::class, 'tambahPeminjamanView']);
    Route::post('/peminjaman/simpan', [AlatController::class, 'simpanPeminjaman']);
});