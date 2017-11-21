<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\User as userList;
use DB;
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

    public function editUser(request $request, $id)
    {
    	DB::table('users')->where('id','=','$id')->edit();
    	return Redirect()->back()->with('message-success','succes edit data !!');
    }

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
