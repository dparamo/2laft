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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/{id}', 'Auth\RegisterController@getCity');

Route::get('/tipo/{id}', 'SiplafController@getCity');



Route::get('/siplaf/index', 'SiplafController@index');
Route::post('/siplaf/create', 'SiplafController@save');





Route::get('/sarlaf/index', 'SarlafController@index');
Route::post('/sarlaf/create', 'SarlafController@save');





// Route::get('formulario', 'StorageController@index');
	
// Route::post('storage/create', 'StorageController@save');






