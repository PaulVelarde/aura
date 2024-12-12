<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\AdminPanelController;
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');
Route::get('/news', [NoticiaController::class, 'index'])->name('index');


Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');
Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.index');


use App\Http\Controllers\GeneroController;
use App\Http\Controllers\LibroController;

Route::get('/generos', [GeneroController::class, 'index'])->name('generos.index');
Route::post('/generos', [GeneroController::class, 'store'])->name('generos.store');

Route::get('/libros', [LibroController::class, 'index'])->name('libros.index');
Route::post('/libros', [LibroController::class, 'store'])->name('libros.store');