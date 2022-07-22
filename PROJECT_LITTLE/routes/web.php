<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AppController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;



Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/event', [App\Http\Controllers\EventController::class, 'index'])->name('event');

Route::get('/app', [App\Http\Controllers\AppController::class, 'index'])->name('app');

Route::get('/aboutUs', [App\Http\Controllers\AboutController::class, 'index'])->name('aboutUs');

