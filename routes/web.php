<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');

Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.index');use App\Http\Controllers\Controller;
use App\Http\Controllers\AdminPanelController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');



Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');


//vale 
Route::get('/admin', [AdminPanelController::class, 'index'])->name('admin.index');