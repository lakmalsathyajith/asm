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

Route::get('locale/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    return "Cache is cleared";
});



Route::get('/', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.home', ['menu' => 'home', 'meta' => $meta]);
});
Route::get('/apartment-listing', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.apartments.apartments', ['menu' => 'rates', 'meta' => $meta]);
});

/*Route::get('/apartment/{id}', function (Request $request) {
    $params = $request->route()->parameters;
    $meta = [];
    $meta['keywords'] = "key1,key2,key3";
    $meta['description'] = "this is a description";

    dd("===",$params);

    return view('pages.apartments.detail', ['params' => $params['id'],['menu' => 'rates'], 'meta' => $meta]);
});*/

Route::get('/apartment/{id}', 'Web\Frontend\ApartmentController@show');

Route::get('/typical-apartment', function () {

    //sample meta goes here
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";

    return view('pages.typicalApartments', ['menu' => 'typical', 'meta' => $meta]);
});
Route::get('/booking-first', function () {
    return view('pages.bookingFirst', ['menu' => 'rates']);
});
Route::get('/booking-second', function () {
    return view('pages.bookingSecond', ['menu' => 'rates']);
});
Route::get('/booking-third', function () {
    return view('pages.bookingThird', ['menu' => 'rates']);
});
Route::get('/latest-property', function () {
    return view('pages.latestProperty');
});
Route::get('/studio-apartments', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.studioAprt', ['menu' => 'typical', 'meta' => $meta]);
});
Route::get('/one-bed-room-apartments', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.oneBedAprt', ['menu' => 'typical', 'meta' => $meta]);
});
Route::get('/two-bed-room-apartments', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.twobedApat', ['menu' => 'typical', 'meta' => $meta]);
});
Route::get('/my-shortlist', function () {


    return view('pages.shortlist');
});
Route::get('/faq', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.faq', ['menu' => 'faq', 'meta' => $meta]);
});
Route::get('/about', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.about', ['menu' => 'about', 'meta' => $meta]);
});
Route::get('/list-with-us', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.listWithUs', ['menu' => 'list-with-us', 'meta' => $meta]);
});
Route::get('/contact', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.contact', ['menu' => 'contact', 'meta' => $meta]);
});

Route::group(['prefix' => '/booking', 'as' => 'booking.'], function () {
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


Route::get('/blog', function () {
    $meta = [];
    $meta['keywords'] = "";
    $meta['description'] = "";
    return view('pages.blog', ['menu' => 'blog', 'meta' => $meta]);
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
Route::resources(['admin/blog' => 'Web\Admin\BlogController']);
Route::get('admin/suburbs', 'Web\Admin\ApartmentController@getSuburb');

// Booking routes
Route::get('admin/booking', 'Web\Admin\BookingController@index')->name('booking.index');
Route::get('admin/booking/{id}', 'Web\Admin\BookingController@show')->name('booking.show');
Route::delete('admin/booking/{id}', 'Web\Admin\BookingController@destroy')->name('booking.destroy');

//User routes
Route::resources(['admin/users' => 'Web\Admin\UserController']);
