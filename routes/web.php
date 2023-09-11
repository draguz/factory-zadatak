<?php

use App\Models\Jelo;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JeloController;
use App\Http\Controllers\FilterController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\LocalizationController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [JeloController::class, 'index']);

// Route::get('/jela', [JeloController::class, 'index']);

Route::get('/jela/{jelo}', [JeloController::class, 'show']);

Route::get('/search', [JeloController::class, 'search']);



