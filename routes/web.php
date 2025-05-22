<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;



Route::get('/', function () {
    return view('layouts.dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index']);

Route::resource('user', UserController::class);
Route::resource('kelas', KelasController::class);
Route::resource('mahasiswa', MahasiswaController::class);
