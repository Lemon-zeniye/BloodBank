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

// Route::get('/home', 'HomeController@index')->name('home');



// Auth::routes();
// // Route::get('/home',function(){
// //         return view('Blood.index');
// // });
// //Route::get('/','DonorController@practice');
// Route::post('/follow/{user}',function(){
//     return ['success'];
// });

// Route::get('/react',function(){
//     return view('react');
// });
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

//Route::get('/receiver/create','ReceiverController@create');

// Route::get('/home','HomeController@index');
// Route::get('/questionnaire/create','QuestionnaireController@create');
// Route::post('/questionnaire','QuestionnaireController@store');
// Route::get('/questionnaire/{questionnaire}','QuestionnaireController@show');

// Route::get('/questionnaire/{questionnaire}/questionn/create','QuestionnController@create');
// Route::post('/questionnaire/{questionnaire}/questionn','QuestionnController@store');
// Route::delete('/questionnaire/{questionnaire}/questionn/{questionn}','QuestionnController@destroy');

// Route::get('/survey/{questionnaire}','SurveyController@create');
// Route::post('/survey/{questionnaire}','SurveyController@store');

// Route::get('/questionnaire/{donor}/create','QuestionnaireController@index');
// Route::post('/questionnaire/{donor}','QuestionnaireController@store');
// Route::get ('/questionnaire/{donor}/show','QuestionnaireController@show');

// Route::get('/',function(){
//     return view('babi');
// });


