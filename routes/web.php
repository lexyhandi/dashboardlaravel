<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GejalaController;
use App\Http\Controllers\PenyakitController;
use App\Http\Controllers\RelasiController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/gejala', [GejalaController::class, 'index'])->name('gejala');
Route::get('/gejala/tambah', [GejalaController::class, 'add']);
Route::post('/gejala/tambahdata', [GejalaController::class, 'insert']);
Route::get('/gejala/edit/{id_gejala}', [GejalaController::class, 'edit']);
Route::post('/gejala/update/{id_gejala}', [GejalaController::class, 'update']);
Route::get('/gejala/delete/{id_gejala}', [GejalaController::class, 'delete']);

Route::get('/penyakit', [PenyakitController::class, 'index'])->name('penyakit');
Route::get('/penyakit/tambah', [PenyakitController::class, 'add']);
Route::post('/penyakit/tambahdata', [PenyakitController::class, 'insert']);
Route::get('/penyakit/detail/{id_penyakit}', [PenyakitController::class, 'detail']);
Route::get('/penyakit/edit/{id_penyakit}', [PenyakitController::class, 'edit']);
Route::post('/penyakit/update/{id_penyakit}', [PenyakitController::class, 'update']);
Route::get('/penyakit/delete/{id_penyakit}', [PenyakitController::class, 'delete']);

Route::get('/relasi', [RelasiController::class, 'index']);

Route::get('/user', [UserController::class, 'index']);
