<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LandingPageController;


Route::get('/', function () {
    return view('LandingPages'); // otomatis mencari resources/views/landing.blade.php
});

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');

// Halaman semua berita
Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');

// Halaman detail berita
Route::get('/berita/{id}', [BeritaController::class, 'show'])->name('berita.show');

