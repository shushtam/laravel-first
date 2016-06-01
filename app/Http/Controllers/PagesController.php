<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    //
    public function home()
    {
    		$people=["xx","yy","zz"];
	return view('/people',compact('people'));
    }
    public function about()
    {
    	return 'about';
    }
}
