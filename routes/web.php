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

use Cornford\Googlmapper\Facades\MapperFacade as Mapper;

Route::get('/', [
    'as' => 'home',
    'uses' => 'WebController@index'
]);

Route::get('/find-centre/{location?}', [
    'as' => 'find-centre',
    'uses' => 'WebController@findCentre'
]);

Route::get('/map/{location?}', [
    'uses' => 'WebController@findCentre'
]);
