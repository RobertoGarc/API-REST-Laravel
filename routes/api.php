<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('categorias','categoriaController@getCategoria');
Route::get('categorias/{id}','categoriaController@getCategoriaxID');
Route::post('setCategoria','categoriaController@setCategoria');
Route::put('updateCategoria/{id}','categoriaController@updateCategoria');
Route::delete('deleteCategoria/{id}','categoriaController@deleteCategoria');