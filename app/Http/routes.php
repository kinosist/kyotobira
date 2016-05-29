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
Route::post('/keyinfo/create', 'KeyInfoController@create');
Route::delete('/keyinfo/delete', 'KeyInfoController@delete');
Route::get('/lockinfo/', 'LockInfoController@index');
Route::post('/lockinfo/create', 'LockInfoController@create');
Route::delete('/lockinfo/delete', 'LockInfoController@delete');
Route::get('/old/', function () {
    return view('old.button');
});
