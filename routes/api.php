<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/clients', 'App\Http\Controllers\ClientController@index');
Route::post('/clients', 'App\Http\Controllers\ClientController@store');
Route::get('/clients/{client}', 'App\Http\Controllers\ClientController@show');
Route::put('/clients/{client}', 'App\Http\Controllers\ClientController@update');
Route::delete('/clients/{client}', 'App\Http\Controllers\ClientController@destroy');

Route::get('/services', 'App\Http\Controllers\ServiceController@index');
Route::post('/services', 'App\Http\Controllers\ServiceController@store');
Route::get('/services/{service}', 'App\Http\Controllers\ServiceController@show');
Route::put('/services/{service}', 'App\Http\Controllers\ServiceController@update');
Route::delete('/services/{service}', 'App\Http\Controllers\ServiceController@destroy');

Route::post('clients/services', 'App\Http\Controllers\ClientController@attach');
Route::post('clients/services/detach', 'App\Http\Controllers\ClientController@detach');

Route::get('service/client', 'App\Http\Controllers\ServiceController@clients');

/* get para mostrar o ver datos 
post para registrar o publicar datos(almacenar) crear registro
put para actualizar o editar datos registrados
delete elimida datos registrados
get index, show
post store
put update
delete destroy
*/