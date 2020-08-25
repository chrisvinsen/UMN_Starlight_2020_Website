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

Route::group(['prefix'=>'registration'], function(){
	Route::get('','RegistrationController@index')->name('registration');
	Route::post('/post', 'RegistrationController@registrationPost')->name('registrationPost');
	Route::group(['prefix'=>'result'], function(){
		Route::get('','RegistrationResultCheckController@index')->name('search');
		Route::post('post', 'RegistrationResultCheckController@searchPost')->name('searchPost');
	});
});

Route::group(['prefix'=>'twibbon'], function(){
	Route::get('','TwibbonController@index')->name('twibbon');
	Route::post('post', 'TwibbonController@twibbonPost')->name('twibbonPost');
});

Route::get('/event','EventController@index')->name('Event');

Route::any('{query}', 
  function() { return redirect('/'); })
  ->where('query', '.*');