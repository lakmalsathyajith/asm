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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


// Start member related routes for v1
Route::group(['prefix' => 'v1'], function () {
    Route::get('users', 'Api\V1\UsersController@index')->name('users.index');
    Route::post('users', 'Api\V1\UsersController@store')->name('users.store');
    Route::get('users/{id}', 'Api\V1\UsersController@show')->name('users.index');
    Route::put('users/{id}', 'Api\V1\UsersController@update')->name('users.update');
    Route::delete('users/{id}', 'Api\V1\UsersController@destroy')->name('users.destroy');

    Route::get('apartments', 'Api\V1\ApartmentController@index')->name('apartments.index');
    Route::get('apartments/{id}', 'Api\V1\ApartmentController@show')->name('apartments.show');

    // a demo api to test rms endpoints
    Route::post('test', 'Api\V1\UsersController@test')->name('test.index');
});
