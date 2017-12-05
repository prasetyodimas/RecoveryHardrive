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

//Home
Route::get('/','HomeAppController@ShowHomePage');

//About-us
Route::group(['prefix'=>'about'],function(){
	Route::get('','AboutUsController@ShowAboutUs');
});

//Services
Route::group(['prefix'=>'service'],function(){
	Route::get('','OurserviceController@ShowService');
});

//Contact
Route::group(['prefix'=>'contact'],function(){
	Route::get('','OurContactController@ShowContact');
});

//Blog Is Comming Soon Features !!
Route::group(['prefix'=>'blog'],function(){
	Route::get('','OurContactController@ShowContact');
});

//Faq 
Route::group(['prefix'=>'faq'],function(){
	Route::get('','FrequentlyAskedQuestionController@ShowFaq');
});
