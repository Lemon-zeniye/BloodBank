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


Auth::routes();
Route::get('/',function(){
    return view('welcome');
});
Route::get('/home','DonorController@index');
Route::get('/events','EventController@index');
Route::get('/events/create','EventController@create');
Route::post('/events','EventController@store');
Route::get('/events/{events}','EventController@show');
Route::delete('/events/{events}','EventController@destroy');

Route::get('/donor/create','DonorController@create');
Route::post('/donor','DonorController@store');
Route::get('/donor/{donor}','DonorController@show');
Route::delete('/donor/{donor}','DonorController@destroy');

Route::get('/donor/{donor}/question/create','QuestionController@create');
Route::post('/donor/{donor}/question','QuestionController@store');
Route::get('/donor/{donor}/question/show','QuestionController@show');


