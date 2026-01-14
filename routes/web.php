<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestDirectivesController;
use App\Http\Controllers\TestLayoutController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/settings', [InfoController::class, 'index'])->name('settings');
Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profile.create');
Route::post('/profiles/store', [ProfileController::class, 'store'])->name('profile.store');
Route::get('/profiles/', [ProfileController::class, 'index'])->name('profiles.index');
Route::get('/profiles/{id}', [ProfileController::class, 'show'])->name('profile.show');
Route::get('/directives', [TestDirectivesController::class, 'index']);
Route::get('/layouts', [TestLayoutController::class, 'index']);