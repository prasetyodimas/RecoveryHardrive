<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use App\Http\Controllers\Auth as AuthUser;
use App\Http\Controllers\Controller;

class LoginAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * HomeAdmin Controller
     * @return \Illuminate\Http\Response
    */	
    
    // use AuthenticatesUsers;
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
	 *
	 */
	public function postAdminLogin(Request $request)
	{
	    $this->validate($request, [
	        'email'    => 'required|email',
	        'password' => 'required'
	    ]);

	    $credentials = $request->only( 'email', 'password' );

	    if(Auth::attempt($credentials))
	    {
	        return redirect('baseadmin/dashboard');
	    }
	    else
	    {
	        return 'Invalid Credentials';
	    }
	}

	public function getSignOut() {
		Auth::logout();
		return Redirect('baseadmin');
	}
	
}
