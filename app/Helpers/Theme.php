<?php

namespace App\Helpers;
use App\Models\AppName;

class Theme  
{
    public static function titleApps()
    {
    	$getNameApps = AppName::find(1);
    	return $getNameApps['app_name'];
    }

    public static function descriptionApps()
    {
    	$getDescription = AppName::find(1);
    	return $getDescription['app_description'];
    }

    public static function locationApps()
    {
    	$getLocation = AppName::find(1);
    	return $getLocation['app_location'];
    }

    public static function emailApps()
    {
    	$getMailer = AppName::find(1);
    	return $getMailer['app_email'];
    }

    public static function phoneApps()
    {
    	$getPhone = AppName::find(1);
    	return $getPhone['app_phone'];
    }
}
