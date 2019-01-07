<?php



Route::get('/', function () {
    return view('task');
});


Route::get('/task','ApiController@index');


Route::resource('/api','ApiController');

Route::get('{any}', function () {
    return view('task');
})->where('any','.*');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
