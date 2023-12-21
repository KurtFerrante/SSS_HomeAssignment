<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\ManufactureController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/cars', [CarController::class, 'index']);

Route::get('/manufacturers', [ManufactureController::class, 'index']);

Route::get('/cars/create', [CarController::class, 'create']);

Route::get('/cars/{id}', [CarController::class, 'details']);

Route::get('/cars/{id}/edit', [CarController::class, 'edit']);