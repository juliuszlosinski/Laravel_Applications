<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UzytkownikController;
use App\Http\Controllers\PodstawowyController;
use App\Http\Controllers\RodzajCwiczeniaController;
use App\Http\Controllers\CwiczenieController;
use App\Http\Controllers\PlanController;
use App\Http\Controllers\DzienController;
use App\Http\Controllers\UserController;

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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/

Route::get('/', [PodstawowyController::class,'zwrocStroneDomowa']);
Route::get('/loguj', [PodstawowyController::class, 'zmienStanUwierzytelnienia']);
Route::get('/kupPlan', [PodstawowyController::class, 'kupPlan']);
Route::get('/ustawPlan', [PodstawowyController::class, 'ustawPlan']);
Route::post('/ustawPlan_', [PodstawowyController::class, 'ustawPlan_']);

Route::post('/lista_cwiczen',[PodstawowyController::class, 'lista_cwiczen']);
Route::get('/lista_cwiczen',[PodstawowyController::class, 'lista_cwiczen']);

Route::get('/poniedzialek', [DzienController::class, 'getPoniedzialek']);
Route::get('/wtorek', [DzienController::class, 'getWtorek']);
Route::get('/sroda', [DzienController::class, 'getSroda']);
Route::get('/czwartek', [DzienController::class, 'getCzwartek']);
Route::get('/piatek', [DzienController::class, 'getPiatek']);
Route::get('/sobota', [DzienController::class, 'getSobota']);
Route::get('/niedziela', [DzienController::class, 'getNiedziela']);

Route::resource('plan', PlanController::class);
Route::resource('uzytkownik', UzytkownikController::class);
Route::resource('rodzajcwiczenia', RodzajCwiczeniaController::class);
Route::resource('cwiczenie', CwiczenieController::class);
Route::resource('User', UserController::class);

require __DIR__.'/auth.php';
