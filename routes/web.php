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
//Route::get('/Daftar','Daftar_member_controler@Daftar_member');
//Route::get('/Login_area','Login_controler@login_area');
//Route::get('/Welcome','Welcome_controller@welcome');

//Route::put('/View/{id}','Daftar_member_controler@das');

//Home
Route::get('/','HomeController@ShowHomePage');

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