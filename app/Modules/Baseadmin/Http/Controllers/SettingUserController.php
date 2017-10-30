<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as userList;
use DB;
use Input;
use Redirect;

class SettingUserController extends Controller
{
	/**
	* Display a listing of the resource.
	* SettingUser Controller
	* @return \Illuminate\Http\Response
	*/	
    public function settingUser()
    {
    	$dataUser = userList::get()->all();
    	// return dd($dataUser);
    	return view('baseadmin::setting-user.index',compact('dataUser'));
    }

    public function addUser()
    {
    	$dataUser = array(
    		'username'  =>get::input('username'), 
    		'email'		=>get::input('email'),
    		'password'	=>get::input('password')

    	);
    	DB::table('users')->insert($dataUser);
    	return Redirect::to('baseadmin/settinguser')->with('message','success add data !!');
    }

    public function editUser($id)
    {
    	DB::table('users')->where('id','=','$id')->edit();
    	return Redirect()->back()->with('message-succes','succes edit data !!');
    }

    public function deleteUser($id)
    {
    	DB::table('users')->where('id','=','$id')->delete();
    	return Redirect()->back()->with('message-succes','succes delete data !!');
    }

}
