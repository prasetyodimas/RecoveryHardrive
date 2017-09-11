<?php

namespace App\Modules\Baseadmin\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PusatBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     * HomeAdmin Controller
     * @return \Illuminate\Http\Response
    */	
    public function pusatBantuan()
    {	
   		return view('baseadmin::pusat-bantuan.index');
    }
}
