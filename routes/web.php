<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;

//import java.io;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//System.out.println("Hello World");

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return " <h1>Halo, Selamat datang di tutorial laravel www.malasngoding.com</h1>";
});

// Route::get('blog', function () {
// 	return view('blog');
// });

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('ets', function () {
	return view('indexets');
});

Route::get('layout', function () {
	return view('layout');
});

Route::get('bootstrap', function () {
	return view('belajarbootstrap');
});

Route::get('javascript', function () {
	return view('belajarjs');
});

Route::get('linktree', function () {
	return view('linktree');
});

Route::get('frontend', function () {
	return view('frontend');
});

Route::get('video', function () {
	return view('video');
});

Route::get('danantara', function () {
	return view('danantara');
});

Route::get('template', function () {
	return view('template');
});

Route::get('tambah', function () {
	return view('tambah');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('welcome', [DosenController::class, 'welcome']);

// Route::get('pegawai/{nama}', [PegawaiController::class, 'index']);
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('formulir/proses', [PegawaiController::class, 'proses']);

Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

Route::get('/pegawai', [PegawaiDBController::class,'index']);
Route::get('/pegawai/tambah', [PegawaiDBController::class,'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class,'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class,'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class,'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class,'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class,'cari']);
