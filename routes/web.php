<?php

use Illuminate\Support\Facades\Route;
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

Route::get('blog', function () {
	return view('blog');
});

Route::get('pertama', function () {
	return view('pertama');
});

Route::get('ets', function () {
	return view('index');
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
