<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/task','ApiController@index');


Route::resource('/api','ApiController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
