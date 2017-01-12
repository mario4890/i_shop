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

Route::resource('/', 'GeneralController');

Route::get('/categories', 'GeneralController@categories');

Route::get('/newProducer', 'GeneralController@newProducers');

Route::get('/allProducers', 'GeneralController@getAllProducers');