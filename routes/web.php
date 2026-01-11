<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestDirectivesController;
use App\Http\Controllers\TestLayoutController;
use Illuminate\Support\Facades\Route;

Route::get('/info', [InfoController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/directives', [TestDirectivesController::class, 'index']);
Route::get('/layouts', [TestLayoutController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);