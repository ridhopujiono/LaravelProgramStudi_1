<?php

use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HalamanUtamaController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('logout', [UserController::class, 'logout']);
Route::post('auth', [UserController::class, 'authenticate']);
Route::controller(HalamanUtamaController::class)->group(function () {
    Route::get('utama', 'index');
    Route::get('visi_misi', 'visi_misi');
    Route::get('tentang', 'tentang');
    Route::get('penghargaan', 'penghargaan');
    Route::get('galeri', 'galeri');
    Route::get('bergabung', 'bergabung');
});
Route::controller(AnggotaController::class)->group(function () {
    Route::post('bergabung', 'store');
});
Route::controller(DashboardController::class)->group(function () {
    Route::get('dashboard', 'index');
    Route::get('manajemen_anggota', 'manajemen_anggota');
    Route::get('edit/{id}', 'edit');
    Route::get('hapus/{id}', 'destroy');
    Route::get('acc_anggota/{id}', 'acc_anggota');
    Route::post('update/{id}', 'update');
});
