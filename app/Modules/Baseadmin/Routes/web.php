<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your module. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::group(['prefix' => 'baseadmin'], function () {
	Route::get('/','HomeAdminController@HomeAdmin');

	Route::group(['prefix' => 'charts'], function(){
		Route::get('','TimeLinesController@Timelines');
	});	

	Route::group(['prefix' => 'timeline'], function(){
		Route::get('','TimeLinesController@Timelines');
	});

	Route::group(['prefix' => 'table'], function(){
		Route::get('','TimeLinesController@Timelines');
	});	
	
	Route::group(['prefix' => 'forms'], function(){
		Route::get('','TimeLinesController@Timelines');
	});		
});
