<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Pengaduan\PengaduanController;
use App\Http\Controllers\Masyarakat\MasyarakatController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::prefix('/auth')->group(function() {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'index'])->name('login.index');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
    Route::get('/logout', [LoginController::class, 'logout'])->name('logout.masyarakat');
});

Route::prefix('/masyarakat')->group(function() {
    Route::get('/', [MasyarakatController::class, 'index'])->name('masyarakat.index');
    Route::resource('pengaduan', PengaduanController::class);
    Route::get('/pengaduan/delete/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.delete');
});
