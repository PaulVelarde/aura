<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\AdminPanelController;
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');
Route::get('/news', [NoticiaController::class, 'index'])->name('index');

Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.index');


Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');




