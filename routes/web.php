<?php

use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/learn-more', function () {
    return view('learn-more');
});

Route::get('/features', function () {
    return view('features');
})->name('features');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', UserController::class);

Route::resource('laporans',LaporanController::class);

Route::resource('admin',LaporanController::class);

Route::resource('petugas',LaporanController::class);