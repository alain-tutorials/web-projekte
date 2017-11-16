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

Route::get('/', function () { return redirect()->route('all'); });

Route::get('all','AdressController@showAdressList')->name('all');

Route::get('add','AdressController@getAdress');

Route::post('add', 'AdressController@addAdress')->name('addAdress');
		
Route::get('update/{n}',
	'AdressController@updateGetAdress')->where('n','[0-9]+');

Route::post('update',
	'AdressController@updatePostAdress')->name('updateAdress');

Route::get('delete/{n}',
	'AdressController@deleteAdress')->where('n','[0-9]+');






