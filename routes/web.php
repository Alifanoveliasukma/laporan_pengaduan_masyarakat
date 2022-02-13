<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\MasyarakatController;

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

Route::get('/login', [AuthController::class,'login']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/postregister', [AuthController::class, 'postregister']);
Route::get('/dashboard/registrasi', [AuthController::class, 'registrasi_petugas']);
Route::post('/postregister/petugas', [AuthController::class, 'postregister_petugas']);
Route::post('/dashboard', [AuthController::class, 'postlogin']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::get('/laporanpengaduan', [DataController::class, 'laporan']);
Route::get('/tulispengaduan', [DataController::class, 'pengaduan']);
Route::get('/laporan', [DataController::class, 'lihat_laporan']);
Route::get('/laporan/cetak_pdf', [DataController::class, 'cetak']);
Route::post('/kirimkan', [DataController::class, 'proses']);
Route::get('/masyarakat/{id_pengaduan}/profile', [DataController::class, 'profile']);
Route::post('/masyarakat/{id_pengaduan}/beritanggapan', [DataController::class,'addtanggapan']);
Route::get('/masyarakat/{id_pengaduan}}/profile', [MasyarakatController::class, 'profilsaya']);