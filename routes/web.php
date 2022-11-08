<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginAdminController;
use App\Http\Controllers\Auth\RegisterAdminController;
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

Route::prefix('/admin/auth')->group(function() {
    Route::get('/register', [RegisterAdminController::class, 'index'])->name('register_admin.index');
    Route::post('/register', [RegisterAdminController::class, 'store'])->name('register_admin.store');
    Route::get('/login', [LoginAdminController::class, 'index'])->name('login_admin.index');
    Route::post('/login', [LoginAdminController::class, 'store'])->name('login_admin.store');
});

Route::resource('admin', AdminController::class);

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
});
