<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ChartsController extends Controller
{
    /**
     * Display a listing of the resource.
     * Charts Controller
     * @return \Illuminate\Http\Response
    */
    public function ChartsView()
    {
    	return view('baseadmin::charts')
    }
}
