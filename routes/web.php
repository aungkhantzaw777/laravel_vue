<?php



Route::get('/', function () {
    return view('welcome');
});


Route::get('/task','ApiController@index');