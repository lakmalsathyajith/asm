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

    // Auth routes
    Route::post('login', 'Api\V1\AuthController@login')->name('api.login');
    Route::group(['middleware' => 'auth:api'], function() {
        Route::get('authUser', 'Api\V1\AuthController@authUser');
    });

    Route::get('users', 'Api\V1\UsersController@index')->name('users.index');
    Route::post('users', 'Api\V1\UsersController@store')->name('users.store');
    Route::get('users/{id}', 'Api\V1\UsersController@show')->name('users.index');
    Route::put('users/{id}', 'Api\V1\UsersController@update')->name('users.update');
    Route::delete('users/{id}', 'Api\V1\UsersController@destroy')->name('users.destroy');

    Route::get('apartments', 'Api\V1\ApartmentController@index')->name('apartments.index');
    Route::get('apartments/{id}', 'Api\V1\ApartmentController@show')->name('apartments.show');
    Route::post('apartments/filter', 'Api\V1\ApartmentController@showMany')->name('apartments.showMany');

    // a demo api to test rms endpoints
    Route::post('get-available-room-types', 'Api\V1\ApartmentController@getAvailableRoomTypes')->name('apartments.getAvailableRoomTypes');
    Route::get('get-states', 'Api\V1\ApartmentController@getStates')->name('apartments.getStates');
    Route::get('get-suburb', 'Api\V1\ApartmentController@getSuburb')->name('apartments.getSuburb');

    Route::post('booking', 'Api\V1\BookingController@store')->name('booking.store');
    Route::get('booking/{id}', 'Api\V1\BookingController@show')->name('booking.show');
    Route::put('booking/{id}', 'Api\V1\BookingController@update')->name('booking.update');
    Route::post('occupant', 'Api\V1\OccupantController@storeBulk')->name('occupant.storeBulk');

    Route::post('file', 'Api\V1\FileController@store')->name('file.store');

    Route::get('blogs', 'Api\V1\BlogController@index')->name('blogs.index');

    Route::post('contact', 'Api\V1\ContactController@store')->name('contact.store');
});
