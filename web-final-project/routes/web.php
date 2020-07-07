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
    return view('index');
});

Auth::routes();

Route::get('/index', 'HomeController@index')->name('index');

Route::get('/page-subject', function () {
    return view('page-subject');
});

Route::get('/page-contact', function () {
    return view('page-contact');
});

Route::get('/page-about-us', function () {
    return view('page-about-us');
});

Route::get('/page-404', function() {
    return view('page-404');
});

Route::get('/page-video', function() {
    return view('page-video');
});

Route::post('contact-us', ['as'=>'contactus.store','uses'=>'ContactUsController@contactUsPost']);


