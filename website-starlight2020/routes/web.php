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

Route::get('','CMSController@home');

Route::get('/aboutus','CMSController@aboutus');

Route::group(['prefix'=>'committee'], function(){
	Route::get('','CMSController@committee');
});

Route::get('/contact','CMSController@contact');
