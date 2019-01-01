<?php



Route::get('/', function () {
    return view('task');
});


Route::get('/task','ApiController@index');


Route::resource('/api','ApiController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
