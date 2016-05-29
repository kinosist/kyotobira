<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['middleware' => ['web']], function () {
Route::get('/keyinfo/', 'KeyInfoController@index');
Route::get('/keyinfo/create', 'KeyInfoController@create');
Route::get('/keyinfo/edit', 'KeyInfoController@edit');
Route::delete('/keyinfo/delete', 'KeyInfoController@delete');
Route::get('/lockinfo/', 'LockInfoController@index');
Route::get('/lockinfo/create', 'LockInfoController@create');
Route::get('/lockinfo/edit', 'LockInfoController@edit');
Route::delete('/lockinfo/delete', 'LockInfoController@delete');
});
Route::get('/old/', function () {
    return view('old.button');
});
