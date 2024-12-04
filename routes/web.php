<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiaController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('news/{id}', [NoticiaController::class, 'show'])->name('news.show');
