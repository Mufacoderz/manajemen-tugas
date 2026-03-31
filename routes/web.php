<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


//login logout
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'loginProses'])->name('loginProses');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('checkLogin')->group(function () {

    //dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //user
    Route::get('user', [UserController::class, 'index'])->name('user');
    Route::get('user/create', [UserController::class, 'create'])->name('userCreate');
    Route::post('user/store', [UserController::class, 'store'])->name('userStore');

    //tugas
    Route::get('tugas', [TugasController::class, 'index'])->name('tugas');
});

