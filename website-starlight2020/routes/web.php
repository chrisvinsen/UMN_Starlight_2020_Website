<?php

use Illuminate\Support\Facades\Route;

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

Route::get('home', function () {
	return redirect("/");
});

Route::get('','CMSController@home')->name('home');

Route::get('/aboutus','CMSController@aboutus')->name('aboutus');

Route::group(['prefix'=>'committee'], function(){
	Route::get('','CMSController@committee')->name('committee');
});

Route::get('/contact','CMSController@contact')->name('contact');

Route::get('/registration','RegistrationController@index')->name('registration');
Route::post('/registrationPost', 'RegistrationController@registrationPost')->name('registrationPost');


Route::get('/search','SearchController@index')->name('search');
Route::post('/searchPost', 'SearchController@searchPost')->name('searchPost');

Route::get('/twibbon','TwibbonController@index')->name('twibbon');
Route::post('/twibbonPost', 'TwibbonController@twibbonPost')->name('twibbonPost');
