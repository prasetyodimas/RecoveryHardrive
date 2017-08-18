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

Route::get('/','Home_controler@index');
Route::post('/simpan','Home_controler@store');
//Route::put('/View/{id}','Daftar_member_controler@das');

//About-us
Route::group(['prefix'=>'about'],function(){
	Route::get('about-us','About_usController@showAbout');
});

//Services
Route::group(['prefix'=>'Services'],function(){
	Route::get('our-service','OurserviceController@showService');
});

//Contact
Route::group(['prefix'=>'Contact'],function(){
	Route::get('our-contact','OurcontactController@showContact');
});