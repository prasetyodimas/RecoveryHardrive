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
	Route::get('/','LoginAdminController@loginAdmin');
	Route::group(['prefix' => 'dashboard'], function(){
		Route::get('/','HomeAdminController@homeAdmin');
	});
	Route::group(['prefix' => 'data-master'],function(){
		Route::get('/','DataMasterController@dataMaster');
	});
	Route::group(['prefix' => 'transaksi'], function(){
		Route::get('/','TransaksiController@dataTransaksi');
	});
	Route::group(['prefix' => 'laporan'], function(){
		Route::get('/','LaporanController@dataLaporan');
	});
	Route::group(['prefix' => 'pusat-bantuan'], function(){
		Route::get('/','PusatBantuanController@pusatBantuan');
	});
	Route::group(['prefix' => 'setting-user'], function(){
		Route::get('/','SettingUserController@settingUser');
	});	
});
