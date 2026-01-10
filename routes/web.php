<?php

use PHPUnit\Runner\HookMethod;
use Symfony\Polyfill\Intl\Idn\Info;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InfoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestLayoutController;
use App\Http\Controllers\TestDirectivesController;


Route::get('/info', [InfoController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/directives', [TestDirectivesController::class, 'index']);
Route::get('/layouts', [TestLayoutController::class, 'index']);
Route::get('/', [HomeController::class, 'index']);