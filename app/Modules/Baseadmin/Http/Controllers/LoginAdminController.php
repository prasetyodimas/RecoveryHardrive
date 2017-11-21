<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Auth as AuthUser;

class LoginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * LoginAdmin Controller
     * @return \Illuminate\Http\Response
    */	
    
    use AuthenticatesUsers;

    public function redirectLogin()
    {
    	return view('baseadmin::login');
    }

    public function getAdminLogin()
	{
	    if(Auth::check() && Auth::user()->role === 'admin')
	    {
	        return redirect('baseadmin.dashboard');
	    }
	    return redirect('baseadmin.login');
	}

   
	/**
	 * Process the login form submitted, check for the
	 * admin credentials in the users table. If match found,
	 * redirect him/her to the admin dashboard, else, display
	 * the error message.
	 */
	public function postAndCheckStatusUser(Request $request)
	{
	    $this->validate($request, [
	        'email'    => 'required|email',
	        'password' => 'required'
	    ]);

	    $credentials = $request->only('email', 'password');
	    if(Auth::attempt($credentials))
	    {
	        return redirect('baseadmin/dashboard');
	    }
	    else
	    {
	        return redirect()->back()->with('message-failed','Whoops login failed !');
	    }
	}
	/**
	 * Process the login form submitted to logout
	 */
	public function getSignOut() 
	{
		$AuthLogout = Auth::logout();
		return redirect('baseadmin')->with('message-success','Successfully Logout !');
	}
	
}
