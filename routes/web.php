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


Route::get('/pizza','App\Http\Controllers\PizzaController@index')->middleware('auth');
Route::get('/pizza/create','App\Http\Controllers\PizzaController@create'); 
Route::get('/pizza/{id}', 'App\Http\Controllers\PizzaController@show')->middleware('auth');

Route::post('/pizza','App\Http\Controllers\PizzaController@store');
Route::delete('/pizza/{id}','App\Http\Controllers\PizzaController@distroy')->middleware('auth');

Auth::routes([
    'register' => false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
