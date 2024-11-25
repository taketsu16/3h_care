<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/home', [HomeController::class, 'show'])->name('home.show');
Route::get('/staff', [HomeController::class, 'staff'])->name('home.staff');
Route::get('/access', [HomeController::class, 'access'])->name('home.access');
Route::get('/recruit', [HomeController::class, 'recruit'])->name('home.recruit');
