<?php

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
    Route::post('apartments/filter', 'Api\V1\ApartmentController@showMany')->name('apartments.showMany');

    // a demo api to test rms endpoints
    Route::post('get-available-room-types', 'Api\V1\ApartmentController@getAvailableRoomTypes')->name('apartments.getAvailableRoomTypes');
    Route::post('book-quote', 'Api\V1\BookingController@getBookQuote')->name('booking.quote');


    Route::get('bookings', 'Api\V1\BookingController@index')->name('bookings.index');
    Route::get('bookings/{id}', 'Api\V1\BookingController@show')->name('bookings.show');
    Route::get('bookings', 'Api\V1\BookingController@store')->name('bookings.store');
    Route::put('bookings/{id}', 'Api\V1\BookingController@update')->name('bookings.update');
    Route::delete('bookings/{id}', 'Api\V1\BookingController@destroy')->name('bookings.destroy');

    Route::get('occupants', 'Api\V1\OccupantController@index')->name('occupants.index');
    Route::get('occupants/{id}', 'Api\V1\OccupantController@show')->name('occupants.show');
    Route::post('occupants', 'Api\V1\OccupantController@store')->name('occupants.store');

    Route::post('dependants', 'Api\V1\OccupantController@storeDependant')->name('occupants.storedepend');
    Route::post('relations', 'Api\V1\OccupantController@storeRelation')->name('occupants.storerelate');

    Route::put('occupants/{id}', 'Api\V1\OccupantController@update')->name('occupants.update');
    Route::delete('occupants/{id}', 'Api\V1\OccupantController@destroy')->name('occupants.destroy');

    Route::get('rmstest', 'Api\V1\UsersController@test')->name('rms.test');



    Route::get('get-states', 'Api\V1\ApartmentController@getStates')->name('apartments.getStates');
    Route::get('get-suburb', 'Api\V1\ApartmentController@getSuburb')->name('apartments.getSuburb');
});
