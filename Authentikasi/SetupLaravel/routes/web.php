<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/buku', [BukuController::class, 'index']);
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
