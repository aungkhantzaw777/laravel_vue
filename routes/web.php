<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/task','ApiController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
