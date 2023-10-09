<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function(){
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::get('/exercises', 'App\Http\Controllers\ExercisesController@index')->name('exercises.index');

Route::get('/exercises/create', 'App\Http\Controllers\ExercisesController@create')->middleware('registered.user')->name('exercises.create');

Route::post('/exercises/store', 'App\Http\Controllers\ExercisesController@store')->name('exercises.store');
