<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppName extends Model
{
  public $primaryKey  ='id_app_name';
  protected $table    ='appname'; 
  protected $fillable =[
    'app_name', 'app_description', 'app_location','app_email', 'app_phone'
  ];

  public function getAppName()
  {
  	$profileApps = DB::table('appname')
  			->select('app_name', 'app_description',' app_location','app_email','app_phone')->get();
  	// return $profileApps;
  	return dd($profileApps);
  }
}
