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

Route::get('/home', 'HomeController@index')->name('home');
Route::patch('/home/{id}', 'HomeController@update')->name('user.update');
Route::get('/profile/{id}', 'HomeController@profile');
Route::get('/home/edit/{id}', 'HomeController@edit');
Route::delete('/home/delete/{id}', 'HomeController@destroy')->name('destroy');

Route::get('/job', 'JobsController@apply')->name('job');;
Route::post('/job', 'JobsController@postApply');
