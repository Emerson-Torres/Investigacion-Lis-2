<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', [PersonaController::class,'index'])->name('index');

Route::post('/registrarPersona', [PersonaController::class,'registrarPersona'])->name('registrarPersona');

Route::post('/modificarPersona', [PersonaController::class,'modificarPersona'])->name('modificarPersona');

Route::get('/eliminarPersona/{id}', [PersonaController::class,'eliminarPersona'])->name('eliminarPersona');
