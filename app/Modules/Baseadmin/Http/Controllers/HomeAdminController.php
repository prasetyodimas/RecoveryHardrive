<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;
use cafeinated;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     * HomeAdmin Controller
     * @return \Illuminate\Http\Response
    */	
    public function HomeAdmin()
    {	
   		return view('baseadmin::homeadmin');
    }
}
