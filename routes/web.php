<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\AnakAsuhController;
use App\Http\Controllers\KegiatanAnakController;
use App\Http\Controllers\AbsensiKaryawanController;

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/karyawan', [KaryawanController::class, 'index'])->name('karyawan.index');
Route::get('/anak-asuh', [AnakAsuhController::class, 'index'])->name('anak.index');
Route::get('/kegiatan', [KegiatanAnakController::class, 'index'])->name('kegiatan.index');

Route::get('/absensi', function () {
    return view('absensi.index');
})->name('absensi.index');

Route::post('/absensi/masuk', [AbsensiKaryawanController::class, 'storeMasuk'])->name('absensi.karyawan.masuk');
Route::post('/absensi/pulang', [AbsensiKaryawanController::class, 'storePulang'])->name('absensi.karyawan.pulang');
