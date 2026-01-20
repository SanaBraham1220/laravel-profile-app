<?php

use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestLayoutController;
use App\Http\Controllers\TestDirectivesController;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/settings', [InfoController::class, 'index'])->name('settings');
Route::get('/login', [LoginController::class, 'show'])->name('login.show');
Route::post('/login', [LoginController::class, 'login'])->name('login.login');
Route::post('/logout', [LoginController::class, 'logout'])->name('login.logout');
Route::get('/profiles', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profiles/{profile}', [ProfileController::class, 'show'])->where('profile', '\d+')->name('profile.show');
Route::get('/directives', [TestDirectivesController::class, 'index']);
Route::get('/layouts', [TestLayoutController::class, 'index']);