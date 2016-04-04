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

Route::get('', 'TracksController@index');
Route::get('view', 'TracksController@tracks');

// Signup Routes
Route::get('admin/signup', 'Auth\AuthController@getRegister');
Route::post('admin/signup', 'Auth\AuthController@postRegister');

// Signin Routes
Route::get('admin/signin', 'Auth\AuthController@getLogin');
Route::post('admin/signin', 'Auth\AuthController@postLogin');

// Signout Routes
Route::get('admin/signout', 'Auth\AuthController@getLogout');

// Password reset Routes
/*Route::get('admin/reset-password', 'Auth\PasswordController@getEmail');
Route::post('admin/reset-password', 'Auth\PasswordController@postEmail');

Route::get('password/reset/{token}', 'PasswordController@getReset');
Route::post('password/reset', 'PasswordController@postReset');*/

Route::group(array('prefix' => 'admin', 'namespace' => 'Backend', 'middleware' => 'auth'), function()
	{
		/*
		Route::get('/signup', array('as' => 'signup', 'uses' => 'Auth\AuthController@getRegister'));
		Route::post('/signup', array('as' => 'signup', 'uses' => 'Auth\AuthController@postRegister'));

		Route::get('/signin', array('as' => 'signin', 'uses' => 'Auth\AuthController@getLogin'));
		Route::post('/signin', array('as' => 'signin', 'uses' => 'Auth\AuthController@postLogin'));

		Route::get('/signout', array('as' => 'signout', 'uses' => 'Auth\AuthController@getLogout'));
		*/
		
		Route::get('/', 'ClientsController@index');
		Route::resource('clients', 'ClientsController');
		Route::resource('orders', 'CommentsController');
	});
