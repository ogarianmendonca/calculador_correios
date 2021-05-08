<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(
    'calculador/index',
    'CalculadorController@index'
)->name('calculador.index');

Route::post(
    'calculador/calc-preco-prazo',
    'CalculadorController@calcPrecoPrazo'
)->name('calculador.calc-preco-prazo');

Route::get(
    'calculador/resultado',
    'CalculadorController@resultado'
)->name('calculador.resultado');
