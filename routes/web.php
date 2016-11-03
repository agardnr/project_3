<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
# Welcome View
Route::get('/', function () {
    return view('landing');

});

# Show a form to get number of paragraphs
Route::get('/form/create', 'IpsumController@create')->name('form.create');

# Process the form to get number of paragraphs
Route::post('/form/create/show', 'IpsumController@show')->name('form.show');


### Random User Generator ###

# Form to get number of users
Route::get('/users/form', 'UserController@create')->name('user.create');

//Route::post('/users/form/show', 'UserController@show')->name('user.show');

Route::post('/users/form/show', 'UserController@generator')->name('user.generator');
