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

Route::namespace('Api')->group(function(){
    Route::get('/restaurants', 'UserController@index');
    Route::get('/restaurants/{id}', 'UserController@show');
    Route::get('/restaurants/{id}/food-items', 'FoodItemController@show');
    Route::get('/types', 'TypeController@index');
    Route::get('/types/{id}', 'TypeController@show');
    Route::post('order','OrderController@store');
});

