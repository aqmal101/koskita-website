<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KostanController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isUser;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [KostanController::class, 'index']);
Route::get('/kostan/{id}', [KostanController::class, 'show'])->name('kostan.show');

Route::middleware([IsUser::class])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');
});

Route::middleware([IsAdmin::class])->group(function () {
    Route::get('/dashboard', [HomeController::class, 'index'])->name('admin/dashboard');
});