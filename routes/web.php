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
    return view('welcome');

});

# Show a form to get number of paragraphs
Route::get('/form/create', 'IpsumController@create')->name('form.create');

# Process the form to get number of paragraphs
Route::post('/form/create/show', 'IpsumController@show')->name('form.show');


# Random User Generator



# Form to get number of users
Route::get('/users/form', 'UserController@create')->name('user.create');

Route::post('/users/form/show', 'UserController@show')->name('user.show');

Route::get('/users/form/test', 'UserController@generator')->name('user.generator');

# Generate Random User data using Faker
Route::get('/users/form/sh__ow',function(){

    #Faker
    $faker = Faker\Factory::create();

    # Pass variable to faker
    $limit = $users;

    for ($i = 0; $i < $limit; $i++) {

    echo $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
    }
});

Route::get('/generate', 'FakeController@index')->name('users.index');
