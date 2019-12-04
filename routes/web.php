<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return "Cache is cleared";
});



Route::get('/', function () {
    return view('pages.home',['menu' => 'home']);
});
Route::get('/apartment-listing', function () {
    return view('pages.apartments.apartments',['menu' => 'rates']);
});

Route::get('/apartment/{id}', function (Request $request) {
    $params = $request->route()->parameters;
    return view('pages.apartments.detail', ['params' => $params['id'],['menu' => 'rates']]);
});

Route::get('/typical-apartment', function () {
    return view('pages.typicalApartments',['menu' => 'typical']);
});
Route::get('/booking-first', function () {
    return view('pages.bookingFirst',['menu' => 'rates']);
});
Route::get('/booking-second', function () {
    return view('pages.bookingSecond',['menu' => 'rates']);
});
Route::get('/booking-third', function () {
    return view('pages.bookingThird',['menu' => 'rates']);
});
Route::get('/latest-property', function () {
    return view('pages.latestProperty');
});
Route::get('/studio-apartments', function () {
    return view('pages.studioAprt',['menu' => 'typical']);
});
Route::get('/one-bed-room-apartments', function () {
    return view('pages.oneBedAprt',['menu' => 'typical']);
});
Route::get('/two-bed-room-apartments', function () {
    return view('pages.twobedApat',['menu' => 'typical']);
});
Route::get('/my-shortlist', function () {
    
        
        return view('pages.shortlist');
   
});
Route::get('/faq', function () {
    return view('pages.faq',['menu' => 'faq']);
});
Route::get('/about', function () {
    return view('pages.about',['menu' => 'about']);
});
Route::get('/list-with-us', function () {
    return view('pages.listWithUs',['menu' => 'list-with-us']);
});
Route::get('/contact', function () {
    return view('pages.contact',['menu' => 'contact']);
});

Route::group(['prefix'=>'/booking','as'=>'booking.'], function(){
    Route::get('/{id}/step-one', function (Request $request) {
        $params = $request->route()->parameters;
        return view('pages.bookingFirst', ['params' => $params['id']]);
    });
    Route::get('/{id}/step-two', function (Request $request) {
        $params = $request->route()->parameters;
        return view('pages.bookingSecond', ['params' => $params['id']]);
    });
    Route::get('/{id}/step-three', function (Request $request) {
        $params = $request->route()->parameters;
        return view('pages.bookingThird', ['params' => $params['id']]);
    });
});


//Auth::routes();
Route::get('admin/login', 'Web\Admin\Auth\LoginController@showLoginForm')->name('login');
Route::post('admin/login', 'Web\Admin\Auth\LoginController@login');
Route::post('admin/logout', 'Web\Admin\Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('admin/register', 'Web\Admin\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('admin/register', 'Web\Admin\Auth\RegisterController@register');

// Password Reset Routes...
Route::get('admin/password/reset', 'Web\Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('admin/password/email', 'Web\Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('admin/password/reset/{token}', 'Web\Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('admin/password/reset', 'Web\Admin\Auth\ResetPasswordController@reset');

Route::get('admin', 'Web\Admin\DashboardController@index')->name('admin');
Route::get('admin/dashboard', 'Web\Admin\DashboardController@index')->name('dashboard');

Route::resources(['admin/apartment' => 'Web\Admin\ApartmentController']);
Route::resources(['admin/content' => 'Web\Admin\ContentController']);
Route::resources(['admin/file' => 'Web\Admin\FileController']);
Route::resources(['admin/option' => 'Web\Admin\OptionController']);
Route::resources(['admin/type' => 'Web\Admin\TypeController']);
Route::get('admin/suburbs', 'Web\Admin\ApartmentController@getSuburb');

// Booking routes
Route::get('admin/booking', 'Web\Admin\BookingController@index')->name('booking.index');
Route::get('admin/booking/{id}', 'Web\Admin\BookingController@show')->name('booking.show');
Route::delete('admin/booking/{id}', 'Web\Admin\BookingController@destroy')->name('booking.destroy');

//User routes
Route::resources(['admin/users' => 'Web\Admin\UserController']);
