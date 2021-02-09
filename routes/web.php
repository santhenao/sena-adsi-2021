<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramasController;
use App\Http\Controllers\InstructoresController;
use App\Http\Controllers\FichasController;
use App\Http\Controllers\AprendicesController;
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

Route::resource('programas', ProgramasController::class);
Route::resource('instructores', InstructoresController::class);
Route::resource('fichas', FichasController::class);
Route::resource('aprendices', AprendicesController::class);
