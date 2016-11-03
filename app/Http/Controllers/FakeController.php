<?php

use Illuminate\Routing\Controller as BaseController;

Route::get('/customers',function(){
    $faker = Faker\Factory::create();

    $limit = 22;

    for ($i = 0; $i < $limit; $i++) {

    echo $faker->name . ', Email Address: ' . $faker->unique()->email . ', Contact No' . $faker->phoneNumber . '<br>';
    }
});
