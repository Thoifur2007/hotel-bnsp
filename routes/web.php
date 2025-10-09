<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PemesananController;

Route::get('/', function () {
    return view('landing.dashboard');
})->name('dashboard');

Route::get('/tentang-kami', function () {
    return view('landing.tentang');
})->name('tentang');

Route::get('/galeri', function () {
    return view('landing.galeri');
})->name('galeri');

Route::get('/pemesanan', [PemesananController::class, 'index'])->name('pemesanan');
Route::post('/pemesanan', [PemesananController::class, 'store'])->name('pemesanan.store');
Route::get('/pemesanan/list', [PemesananController::class, 'list'])->name('pemesanan.list');

