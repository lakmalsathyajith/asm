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

Route::get('/', function () {
    return view('pages.home');
});
Route::get('/apartment-listing', function () {
    return view('pages.apartments.apartments');
});

Route::get('/apartment/{id}', function (Request $request) {
    $params = $request->route()->parameters;
    return view('pages.apartments.detail', ['params' => $params['id']]);
});

Route::get('/typical-apartment', function () {
    return view('pages.typicalApartments');
});
Route::get('/booking-first', function () {
    return view('pages.bookingFirst');
});
Route::get('/booking-second', function () {
    return view('pages.bookingSecond');
});
Route::get('/booking-third', function () {
    return view('pages.bookingThird');
});
Route::get('/latest-property', function () {
    return view('pages.latestProperty');
});
Route::get('/studio-apartments', function () {
    return view('pages.studioAprt');
});
Route::get('/one-bed-room-apartments', function () {
    return view('pages.oneBedAprt');
});
Route::get('/two-bed-room-apartments', function () {
    return view('pages.twobedApat');
});
Route::get('/my-shortlist', function () {
    
        
        return view('pages.shortlist');
   
});
Route::get('/faq', function () {
    return view('pages.faq');
});
Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/list-with-us', function () {
    return view('pages.listWithUs');
});
Route::get('/contact', function () {
    return view('pages.contact');
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

Route::get('admin/booking', 'Web\Admin\BookingController@index')->name('booking.index');
Route::get('admin/booking/{id}', 'Web\Admin\BookingController@show')->name('booking.show');
