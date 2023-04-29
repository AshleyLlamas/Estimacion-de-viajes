<?php

use App\Http\Controllers\FuelController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TollboothController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

//CATALOGOS:
Route::resource('routes', RouteController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.routes');
Route::resource('tollbooths', TollboothController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.tollbooths');
Route::resource('units', UnitController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.units');
Route::resource('fuels', FuelController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('admin.fuels');
