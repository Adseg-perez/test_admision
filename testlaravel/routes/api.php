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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('producto', 'ProductoController');

Route::resource('usuario', 'UsuarioController');
/*
Route::get('producto', ['middleware' => 'cors' , 'uses'=> 'ProductoController@index']);
Route::post('usuario', ['middleware' => 'cors' , 'uses'=> 'UsuarioController@store']);
*/
/*
Route::get('producto', array('middleware' => 'cors', 'uses' => 'ProductoController@index'));
Route::post('usuario', array('middleware' => 'cors' , 'uses'=> 'UsuarioController@store'));
*/