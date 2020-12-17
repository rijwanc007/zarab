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
    return view('frontend.index');
});
Route::get('/home', 'Admin\FrontendController@index')->name('frontend.index');
Route::get('/about-us', 'Admin\FrontendController@about')->name('frontend.about');
Route::get('/portfolio', 'Admin\FrontendController@portfolio')->name('frontend.portfolio');
Route::get('/our-products', 'Admin\FrontendController@products')->name('frontend.products');
Route::get('/company-profile', 'Admin\FrontendController@profile')->name('frontend.profile');
Route::get('/rmg-in-bd', 'Admin\FrontendController@rmg')->name('frontend.rmg');
