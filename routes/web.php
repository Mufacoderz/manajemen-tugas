<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');

Route::get('user', [UserController::class, 'index'])->name('user');

Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
