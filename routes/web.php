<?php

use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UsersController::class, 'index'])->name('users.index');
Route::get('/create', [UsersController::class, 'create'])->name('users.create');
Route::post('/', [UsersController::class, 'store'])->name('users.store');
