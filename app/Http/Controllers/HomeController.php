<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
<<<<<<< HEAD
use Session;
=======
>>>>>>> c7c830092d8ac53514bbbf4f8d51176b0b68b60f

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
<<<<<<< HEAD

        $this->middleware('auth');

=======
        $this->middleware('auth');
>>>>>>> c7c830092d8ac53514bbbf4f8d51176b0b68b60f
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
<<<<<<< HEAD
        Session::flash('flash_message','Welcome back home!'); 

      
=======
>>>>>>> c7c830092d8ac53514bbbf4f8d51176b0b68b60f
        return view('home');
    }
}
