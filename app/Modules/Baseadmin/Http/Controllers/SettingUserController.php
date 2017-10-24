<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as userList;
use DB;

class SettingUserController extends Controller
{
	/**
	* Display a listing of the resource.
	* HomeAdmin Controller
	* @return \Illuminate\Http\Response
	*/	
    public function settingUser()
    {
    	$dataUser = userList::get()->all();
    	return view('baseadmin::setting-user.index',compact('dataUser'));
    }

}
