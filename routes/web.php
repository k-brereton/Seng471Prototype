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
    return redirect('/login');
});

Route::get('/cars','CarController@index');
Route::get('/cars/{car}','CarController@showCar');
Route::get('/cars/{car}/colors','CarController@showCarColors');

Route::post('cars/{car}/decision','DecisionController@addDecision');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/decisions','DecisionController@index');
Route::get('/decisions/{decision}','DecisionController@showDecision');