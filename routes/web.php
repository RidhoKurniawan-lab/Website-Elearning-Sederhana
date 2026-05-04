<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'showlogin'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('loginProcess');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // Route Resource Mahasiswa
    Route::resource('mahasiswa', MahasiswaController::class);

    //Route MataKuliah
    Route::resource('matakuliah', MataKuliahController::class);

    //Route Jurusan
    Route::resource('jurusan', JurusanController::class);

});
