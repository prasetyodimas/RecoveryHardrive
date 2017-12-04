<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as userList;
use DB;
use Validator;
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
    	return view('baseadmin::setting-user.index',compact('dataUser'));
    }

    /*Function add user*/
    public function addUser(request $request)
    {
    
        $input = $request->all();
        $dataUser = new userList();

        $dataUser->username       = $input['nama_user'];
        $dataUser->email          = $input['email_user'];
        $dataUser->password       = md5($input['password_user']);
        $dataUser->level          = $input['level_akses'];
        $dataUser->remember_token = $input['remember_token'];
        $dataUser->save($request->all());
        return Redirect::to('baseadmin/setting-user')->with('message-success','success add data !!');
    }

    /* Function show value to form*/
    public function showUserVal($id)
    {
        $getuser = userList::find($id);
        return view('baseadmin::setting-user.edit-user',compact('getuser')); 
    }

    /* Function edit user */
    public function editUser(request $request)
    {
        $update = $request->all();
        $dataUser = new userList();

        $dataUser->username       = $update['nama_user'];
        $dataUser->email          = $update['email_user'];
        $dataUser->password       = md5($update['password_user']);
        $dataUser->level          = $update['level_akses'];
        $dataUser->remember_token = $update['remember_token'];
    	$user = userList::where($request)->$update;
    	return Redirect()->back()->with('message-success','succes edit data !!');
    }

    /* Function delete user */
    public function deleteUser($id)
    {
        $dataUser = userList::findOrFail($id);
        if ($dataUser) {
            if ($dataUser->delete()) {
    	       return Redirect()->back()->with('message-success','succes delete data !!');
            }else{
               return Redirect()->back()->with('message-failed','failed delete data !!');
            }
        }else{
            echo "Cannot find this data !!";
        }
    }

}
