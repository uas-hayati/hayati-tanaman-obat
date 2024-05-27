<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TumbuhanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// HALAMAN USER (BLOM FIX)
Route::get('/', function () {
    return view('layouts.user');
});


// LOGIN & REGISTER ADMIN
// 1. Login
//menampilkan halaman login
Route::get('/admin', [AuthController::class, 'show'])->name('login');
// memproses data login
Route::post('/login', [AuthController::class, 'login']);
// melakukan logout
Route::get('/logout', [AuthController::class, 'logout'])->middleware('auth');

// HALAMAN ADMIN
// 1. Dashboard
//menampilkan halaman dashboard (wajib login)
Route::get('/dashboard', [AdminController::class, 'index'])->middleware('auth');

// 3. tumbuhan
// menampilkan halaman tumbuhan (lihat data) --> blm fix controllernya blm
Route::get('lihat_tumbuhan', [TumbuhanController::class, 'index'])->middleware('auth')->name('admin.tumbuhan.index');

Route::get('tambah_tumbuhan', [TumbuhanController::class, 'create'])->middleware('auth');
Route::post('tambah_tumbuhan', [TumbuhanController::class, 'store'])->middleware('auth');

// halaman edit tumbuhan obat
Route::get('/edit_tumbuhan/{id}', [TumbuhanController::class, 'edit'])->middleware('auth');
Route::post('/edit_tumbuhan/{id}', [TumbuhanController::class, 'update'])->middleware('auth');

// halaman hapus tumbuhan obat
Route::get('/hapus_tumbuhan/{id}', [TumbuhanController::class, 'destroy'])->middleware('auth');

// HALAMAN USER
// halaman index
Route::get('/', [UserController::class,'index']);
// halaman lihat tumbuhan obat
Route::get('/products', [UserController::class,'showTumbuhan']);
// halaman detail tumbuhan obat
Route::get('/product-detail/{id}', [UserController::class,'showDetail']);
//proses pencarian
Route::post('/products', [UserController::class,'search']);



