<?php

use App\Http\Controllers\PersonagensController;
use App\Http\Controllers\RotaController;
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

Route::get('/',[RotaController::class, 'index']);

Route::get('/personagens',[PersonagensController::class, 'ListarPersonagens']);
Route::get('/personagens/create',[PersonagensController::class, 'CriarPersonagens']);
Route::post('personagens/armazenar',[PersonagensController::class, 'store']);
Route::post('/personagens/ProcurarPersonagem',[PersonagensController::class, 'ProcurarPersonagem']);
