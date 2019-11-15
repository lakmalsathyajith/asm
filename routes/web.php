<?php

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
    return view('pages.apartments');
});
Route::get('/apartment-inner-listing', function () {
    return view('pages.apartmentInner');
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
Route::get('/studio-aprt', function () {
    return view('pages.studioAprt');
});
Route::get('/one-bed-aprt', function () {
    return view('pages.oneBedAprt');
});
Route::get('/two-bed-aprt', function () {
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


Route::get('admin/dashboard', 'Web\Admin\DashboardController@index')->name('home');
Route::resources([
    'admin/apartment' => 'Web\Admin\ApartmentController',
]);

//Route::get('admin/apartments', 'Web\Admin\ApartmentController@index')->name('home');
//Route::get('admin/apartment/{$id}', 'Web\Admin\ApartmentController@show')->name('home');
//Route::get('admin/apartment/create', 'Web\Admin\ApartmentController@create')->name('home');
//Route::get('admin/apartment/updates', 'Web\Admin\ApartmentController@edit')->name('home');
//Route::post('admin/apartment/delete', 'Web\Admin\ApartmentController@delete')->name('home');
