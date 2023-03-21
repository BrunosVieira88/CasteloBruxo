<?php

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
    return view('index');
});
Route::get('/Personagens', function () {
    return view('Personagens.PersonagensIndex');
});
Route::get('/CMB', function () {
    return view('ConselhoMagicoBrasileiro.CmbIndex');
});
Route::get('/Castelo', function () {
    return view('CasteloBruxo.casteloIndex');
});
Route::get('/Aurinegro', function () {
    return view('Times.Aurinegro');
});
Route::get('/BrancoForte', function () {
    return view('Times.BrancoForte');
});
Route::get('/RubroBravo', function () {
    return view('Times.RubroBravo');
});
Route::get('/Verdepluma', function () {
    return view('Times.Verdepluma');
});
Route::get('/Questionario', function () {
    return view('Questionario.Questionario');
});

