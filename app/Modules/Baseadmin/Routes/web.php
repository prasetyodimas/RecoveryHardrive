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
Route::group(['prefix'=>'baseadmin'], function(){
	Route::get('/','LoginAdminController@redirectLogin');
	Route::post('/','LoginAdminController@postAndCheckStatusUser');
	Route::get('/logout','LoginAdminController@getSignOut');
	Route::get('/dashboard','HomeAdminController@homeAdmin');

	//Data Master
	Route::group(['prefix' => 'data-master'], function(){
		Route::get('/','DataMasterController@dataMaster');
	});

	//Transaksi
	Route::group(['prefix' => 'transaksi'], function(){
		Route::get('/','TransaksiController@dataTransaksi');
	});

	//Laporan
	Route::group(['prefix' => 'laporan'], function(){
		Route::get('/','LaporanController@dataLaporan');
	});

	//Pusat Bantuan
	Route::group(['prefix' => 'pusat-bantuan'], function(){
		Route::get('/','PusatBantuanController@pusatBantuan');
	});

	//Setting User
	Route::group(['prefix' => 'setting-user'], function(){
		Route::get('/','SettingUserController@settingUser');
		Route::post('addUser','SettingUserController@addUser');
		Route::get('showUser/{id}','SettingUserController@showUserVal');
		Route::post('editUser','SettingUserController@editUser');
		Route::get('deleteUser/{id}','SettingUserController@deleteUser');
	});
	//Setting Aplication
	Route::group(['prefix'=> 'setting-app'], function(){
		Route::get('/','AppNameController@ShowApp');
	});	
});
