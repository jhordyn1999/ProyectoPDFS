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

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/','BancaPapayitaController@index');
Route::get('/z','BancaPapayitaController@generarpdf18');
Route::get('/a','BancaPapayitaController@generarpdf1');
Route::get('/b','BancaPapayitaController@generarpdf2');
Route::get('/c','BancaPapayitaController@generarpdf3');
Route::get('/d','BancaPapayitaController@generarpdf4');
Route::get('/e','BancaPapayitaController@generarpdf5');
Route::get('/f','BancaPapayitaController@generarpdf6');
Route::get('/g','BancaPapayitaController@generarpdf7');
Route::get('/h','BancaPapayitaController@generarpdf8');
Route::get('/i','BancaPapayitaController@generarpdf9');
Route::get('/j','BancaPapayitaController@generarpdf10');
Route::get('/k','BancaPapayitaController@generarpdf11');
Route::get('/l','BancaPapayitaController@generarpdf12');
Route::get('/m','BancaPapayitaController@generarpdf13');
Route::get('/n','BancaPapayitaController@generarpdf14');
Route::get('/o','BancaPapayitaController@generarpdf15'); 
Route::get('/p','BancaPapayitaController@generarpdf16'); 
Route::get('/q','BancaPapayitaController@generarpdf17'); 