<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EskulController;
use App\Http\Controllers\GalleriController;


Route::get('/', function () {
    return view('front.app');
});

Route::get('/beranda', [BerandaController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/ekstrakurikuler', [EskulController::class, 'index']);
Route::get('/galeri', [GalleriController::class, 'index']);
