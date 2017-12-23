<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class AppName extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    public $primaryKey   = 'id_app_name';
    
    protected $table = 'appname'; 
    protected $fillable  = ['app_name', 'app_description', 'app_location','app_email','app_phone'];
    public $timestamps = true;

    public static function getAppName()
    {
    	$profileApps = DB::table('appname')->select('app_name', 'app_description')->get();
    	return $profileApps;
    }
}
