<?php

use App\Http\Controllers\SiswaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\QrCodeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

//Route::apiResource('/siswa', SiswaController::class);

Route::post('/siswa', [SiswaController::class, 'store']);
Route::get('/siswa', [SiswaController::class, 'index']);
Route::post('/guru', [GuruController::class, 'store']);
Route::get('/guru', [GuruController::class, 'index']);
Route::post('/jadwal', [JadwalController::class, 'store']);
Route::get('/jadwal', [JadwalController::class, 'index']);
Route::post('/lokasi', [LokasiController::class, 'store']);
Route::get('/lokasi', [LokasiController::class, 'index']);
Route::post('/qrcode', [QrCodeController::class, 'store']);
Route::get('/qrcode', [QrCodeController::class, 'index']);