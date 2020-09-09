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
Route::post('auth/login', 'Api\\AuthController@login');
Route::get('users', 'Api\\UserController@index');

//JWT Token
Route::group(['middleware' => ['apiJwt']], function(){
 Route::get('users', 'Api\\UserController@index');
 Route::post('auth/logout', 'Api\\AuthController@logout');
 Route::get('/tools', 'ToolsController@showAll')->name("tools.showAll");
 Route::post('/tools', 'ToolsController@store')->name("tools.store");
 Route::delete('/tools/{id}', 'ToolsController@delete')->name("tools.delete");

});