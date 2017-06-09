<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'StatesController@active');
Route::get('/active', 'StatesController@active');
Route::get('active/delete/{id}', 'StatesController@deleteActive');

Route::get('/deleted', 'StatesController@deleted');
Route::get('deleted/delete/{id}', 'StatesController@forceDelete');

Route::get('/all', 'StatesController@all');

Event::listen('illuminate.query', function($query, $bindings, $time, $name)
{
    var_dump($query);       // The query
    var_dump($bindings);    // The arguments being passed to the query
    var_dump($time);        // The amount of time the query took to run
    var_dump($name);        // The database connection name
});