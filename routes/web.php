<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\KostanController;
use App\Http\Controllers\DashboardController;
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

Route::middleware([isAdmin::class])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
});