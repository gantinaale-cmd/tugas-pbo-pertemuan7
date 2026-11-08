<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return 'Siap Jendral';
});

Route::get('/buku', [App\Http\Controllers\BukuController::class, 'index'])
    ->name('buku.index');
Route::get('/buku/{id}', [App\Http\Controllers\BukuController::class, 'show'])
    ->name('buku.show');
Route::get('/kategori/{nama_kategori}', [App\Http\Controllers\BukuController::class, 'kategori'])
    ->name('buku.kategori');
    