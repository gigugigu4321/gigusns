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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['middleware' => 'api'], function () {
    Route::get('testyou', function(){
      return "test";
    });
    Route::post('signup', 'AuthenticateController@signup');
    Route::post('authenticate',  'AuthenticateController@authenticate');

    Route::get('users', 'UsersController@getAllUsers');
    Route::get('users/{account_id}', 'UsersController@getUser');
    Route::post('users/{account_id}', 'UsersController@editUser');

    Route::group(['middleware' => 'jwt.auth'], function () {
        Route::get('logout', 'AuthenticateController@logout')->middleware('jwt.refresh');
        Route::get('me',  'AuthenticateController@getCurrentUser');
    });
});
