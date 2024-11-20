<?php

use App\Http\Controllers\santriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');

//Auth
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('guest');
Route::post('/log', [AuthController::class, 'storeLogin'])->name('login.store');
Route::post('/regist', [AuthController::class, 'storeRegister'])->name('register.store');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

//admin
Route::get('/data_santri', [santriController::class, 'index'])->name('data.santri');
Route::get('/create_santri', [santriController::class, 'createSantri'])->name('create.santri');
Route::post('/santri_store', [santriController::class, 'store'])->name('store.santri');
Route::get('/santri/{id}/edit', [SantriController::class, 'edit'])->name('edit.santri');
Route::put('/santri/{id}', [SantriController::class, 'update'])->name('update.santri');
Route::delete('/santri/{id}', [SantriController::class, 'delete'])->name('santri.delete');