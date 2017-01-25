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

Route::get('/', function () {
    return view('welcome');
});

Route::get('database-test', function () {
    if(DB::connection()->getDatabaseName()){
        echo 'Connected successfully to database ' . DB::connection()->getDatabaseName();
    }
});

Route::get('agenda', 'PersonaController@index' );
Route::get('add', 'PersonaController@add' );
Route::get('edit', 'PersonaController@edit' );
Route::get('delete', 'PersonaController@delete' );
Route::post('update', 'PersonaController@update' );
Route::post('insert', 'PersonaController@insert' );
