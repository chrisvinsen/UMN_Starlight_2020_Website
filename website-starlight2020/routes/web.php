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

Route::get('/','CMSController@home')->name('home');

Route::get('/aboutus','CMSController@aboutus')->name('aboutus');

Route::get('/committee','CMSController@committee')->name('committee');

Route::get('/contact','CMSController@contact')->name('contact');

Route::get('/event','CMSController@event')->name('event');

Route::get('/email','CMSController@email')->name('email');

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

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=>'admin'], function(){
	Route::get('/registration','PanelController@registration')->name('panel.registration')->middleware('auth');
	Route::get('/registration/{dataUmum}','PanelController@registration_detail')->name('panel.registration.detail')->middleware('auth');
});



Route::any('{query}',
  function() { return redirect('/'); })
  ->where('query', '.*');