<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\SurveiController;
use App\Http\Controllers\BantuanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminPesanController;
use App\Http\Controllers\AdminSurveiController;
use App\Http\Controllers\AdminLayananController;
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

// WEB SIDE
Route::get('/', [BerandaController::class, 'index']);
Route::get('/layanan', [LayananController::class, 'index']);
Route::get('/buat-layanan', [LayananController::class, 'create']);
Route::post('/kirim-layanan', [LayananController::class, 'store']);

Route::get('/bantuan', [BantuanController::class, 'index']);

Route::get('/kontak', [KontakController::class, 'index']);
Route::post('/kirim-pesan', [KontakController::class, 'store']);

Route::post('/kirim-survei', [SurveiController::class, 'store']);

// AUTHENTIKASI
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

// ADMIN SIDE
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('admin');
Route::get('/data-layanan', [AdminLayananController::class, 'index'])->middleware('admin');
Route::get('/tambah', [AdminLayananController::class, 'create'])->middleware('admin');
Route::post('/save', [AdminLayananController::class, 'store'])->middleware('admin');
Route::get('{id}/edit', [AdminLayananController::class, 'edit'])->middleware('admin');
Route::post('update/{id}', [AdminLayananController::class, 'update'])->middleware('admin');
Route::get('{id}/delete-layanan', [AdminLayananController::class, 'destroy'])->middleware('admin');

Route::get('/data-pesan', [AdminPesanController::class, 'index'])->middleware('admin');
Route::get('{id}/delete-pesan', [AdminPesanController::class, 'destroy'])->middleware('admin');

Route::get('/data-survei', [AdminSurveiController::class, 'index'])->middleware('admin');
Route::get('{id}/delete-survei', [AdminSurveiController::class, 'destroy'])->middleware('admin');

Route::get('/data-user', [userController::class, 'index'])->middleware('admin');