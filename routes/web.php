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
Route::get('/typical-apartment', function () {
    return view('pages.typicalApartments');
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