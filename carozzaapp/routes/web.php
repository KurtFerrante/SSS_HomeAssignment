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

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');

Route::get('/manufacturers', [ManufactureController::class, 'index'])->name('manufacturers.index');

Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');

Route::get('/cars/{id}', [CarController::class, 'details'])->name('cars.details');

Route::get('/cars/{id}/edit', [CarController::class, 'edit'])->name('cars.edit');

Route::post('/cars', [CarController::class, 'store'])->name('cars.store');

Route::put('/cars/{id}', [CarController::class, 'update'])->name('cars.update');

Route::delete('/cars/{id}', [CarController::class, 'destroy'])->name('cars.destroy');