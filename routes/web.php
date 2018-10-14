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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'VotingController@list')->name('home');

Route::post('/process', 'VotingController@process');

Route::resource('/candidates', 'CandidateController')->middleware('can:admin');

Route::resource('/users', 'UserController')->middleware('can:admin');

//Route::get('/send', 'UserController@sendEmail');

Route::get('/setup', 'VotingController@setup');

Route::post('/set', 'VotingController@setMaxSelect');