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
Route::get('/deviceinfo/', 'DeviceInfoController@index');
Route::get('/deviceinfo/create', 'DeviceInfoController@create');
Route::post('/deviceinfo/create', 'DeviceInfoController@postcreate');
Route::get('/deviceinfo/edit/{id}', 'DeviceInfoController@edit');
Route::post('/deviceinfo/edit/{id}', 'DeviceInfoController@postedit');
Route::get('/deviceinfo/delete/{id}', 'DeviceInfoController@delete');
Route::get('/keyinfo/', 'KeyInfoController@index');
Route::get('/keyinfo/create', 'KeyInfoController@create');
Route::post('/keyinfo/create', 'KeyInfoController@postcreate');
Route::get('/keyinfo/edit/{id}', 'KeyInfoController@edit');
Route::post('/keyinfo/edit/{id}', 'KeyInfoController@postedit');
Route::get('/keyinfo/delete/{id}', 'KeyInfoController@delete');
Route::get('/lockinfo/', 'LockInfoController@index');
Route::get('/lockinfo/create', 'LockInfoController@create');
Route::post('/lockinfo/create', 'LockInfoController@postcreate');
Route::get('/lockinfo/edit/{id}', 'LockInfoController@edit');
Route::post('/lockinfo/edit/{id}', 'LockInfoController@postedit');
Route::get('/lockinfo/delete/{id}', 'LockInfoController@delete');
Route::get('/keylog/', 'KeyLogController@index');
Route::post('/keylog/search', 'KeyLogController@search');
Route::get('/keylog/delete/{id}', 'KeyLogController@delete');
Route::get('/locking/', 'LockingController@index');
Route::post('/locking/on', 'LockingController@locking');
Route::post('/locking/off', 'LockingController@unlocking');
});
Route::get('/old/', function () {
    return view('old.button');
});
