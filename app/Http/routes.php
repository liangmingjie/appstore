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

Event::listen('404', function() {
    abort(404);
});

Route::get('/', 'HomeController@index');
Route::get('home', 'HomeController@index');

Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

#开发者
Route::group(['prefix' => 'developer','namespace' => 'Developer'],function()
{
    Route::get('/','DeveloperController@index');
    Route::post('','DeveloperController@store');
});

#应用中心
Route::group(['prefix' => 'appcenter','namespace' => 'AppCenter'],function()
{
    Route::get('/','AppManageController@index');
});

