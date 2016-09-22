<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');

/*Route::group(['prefix' => 'v1'], function()
{
	Route::resource('/authenticate', 'Api\v1\AuthenticateController', ['only' => ['index']]);

	Route::post('/authenticate', 'Api\v1\AuthenticateController@authenticate');

	Route::get('/authenticate/user', 'AuthenticateController@getAuthenticatedUser');

	Route::resource('//city', 'Api\v1\CityController');

	Route::resource('/items', 'Api\v1\ItemController');
});*/

Route::resource('/v1/authenticate', 'Api\v1\AuthenticateController', ['only' => ['index']]);

Route::post('/v1/authenticate', 'Api\v1\AuthenticateController@authenticate');

Route::get('/v1/authenticate/user', 'AuthenticateController@getAuthenticatedUser');

Route::resource('/v1/city', 'Api\v1\CityController');

Route::resource('/v1/items', 'Api\v1\ItemController');
