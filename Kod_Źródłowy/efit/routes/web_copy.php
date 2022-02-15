<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzytkownikController;
use App\Http\Controllers\PodstawowyController;
use App\Http\Controllers\RodzajCwiczeniaController;
use App\Http\Controllers\CwiczenieController;


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

Route::get('/', [PodstawowyController::class,'zwrocStroneDomowa']);
Route::resource('uzytkownik', UzytkownikController::class);
Route::resource('rodzajcwiczenia', RodzajCwiczeniaController::class);
Route::resource('cwiczenie', CwiczenieController::class);