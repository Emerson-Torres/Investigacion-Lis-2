<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PersonaController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/index', [PersonaController::class,'index']);
Route::post('/registrarPersona', [PersonaController::class,'registrarPersona'])->name('registrarPersona');
Route::post('/modificarPersona', [PersonaController::class,'modificarPersona'])->name('modificarPersona');
Route::get('/eliminarPersona/{id}', [PersonaController::class,'eliminarPersona']);
