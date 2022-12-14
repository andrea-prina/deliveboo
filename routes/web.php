<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('guest.home');
});

Auth::routes();


Route::middleware('auth')
    // Update the folder containing the Controllers
    ->namespace('Admin')
    // Update the name of each subroute with a prefix
    ->name('admin.')
    // Update each url by adding the prefix/
    ->prefix('admin')
    // Group all the routes in that folder
    ->group(function() {
        Route::get('/user', 'UserController@show')->name('show');
        Route::put('/user/{id}', 'UserController@toggleFree')->name('toggleFree');
        Route::resource('foodItems','FoodItemController');
        Route::resource('orders','OrderController');
    });

Route::get('/home', 'HomeController@index')->name('home');


Route::get("{any?}", function() {
    return view("guest.home");
})->where("any", ".*");
