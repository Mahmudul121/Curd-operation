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

Route::get('/abc', function () {
    return view('test');
});

Route::get('/login','LoginController@index')->name('login.index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index')->name('home.index');

Route::get('/add', 'HomeController@add');
Route::post('/add', 'HomeController@create');

Route::get('/stdList', 'HomeController@show')->name('home.stdlist');

Route::get('/edit/{sid}', 'HomeController@edit');
Route::post('/edit/{sid}', 'HomeController@update');
Route::get('/details/{sid}', 'HomeController@details')->name('home.details');
Route::get('/delete/{sid}', 'HomeController@delete');
Route::post('/delete/{sid}', 'HomeController@destroy');

Route::get('/logout', 'logoutController@index');



