<?php

use App\Http\Controllers\FuelController;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\TollboothController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes(["register" => false]);

Route::resource('routes', RouteController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('routes');
Route::resource('tollbooths', TollboothController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('tollbooths');
Route::resource('units', UnitController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('units');
Route::resource('fuels', FuelController::class)->only(['index', 'create', 'edit', 'show', 'destroy'])->names('fuels');

Route::view('/generar-presupuesto', 'generarPresupuesto')->name('generarPresupuesto');

