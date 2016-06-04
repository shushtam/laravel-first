<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\socusers;

use DB;
use Flash;
use Session;
use Input;

class SocusersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $socusers=socusers::all();
        return View('socusers.index')->with('socusers',$socusers);


    }
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return View('socusers.signin');
   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
            if($request->name=="" && $request->surname=="" && $request->year=="")
            {
    $socusers = DB::table('socusers')->where('email', $request->email)->where('password', $request->password)->first();
        if($request->name==$socusers->name)
            return View('socusers.home')->with('socusers',$socusers);
        else
        {
            return View('socusers.signin');
        }
    }
        else
        {
        if(!preg_match("/^[a-zA-Z\d]+$/", $request->name) || !preg_match("/^[a-zA-Z\d]+$/", $request->surname)
         || !preg_match("/^[\d]+$/", $request->year) || !filter_var($request->email, FILTER_VALIDATE_EMAIL) || $request->password="" )
           
        {
             Session::flash('message','You entered incorrect');
         return View('socusers.signin');
            
        
}
    
    else
{
    if(INPUT::hasfile('file'))
            {
         
                $file=INPUT::file('file');
                $file->move('uploads',$file->getClientOriginalName());
                            DB::table('socusers')->insert(
    ['name' => $request->name, 'surname' => $request->surname, 'year' => $request->year,'image'=>$file->getClientOriginalName(),
    'email' => $request->email,'password' => $request->password]);
                        }

               // echo "<img src='uploads/'.$file->getClientOriginalName())";
            
            else
            {
            DB::table('socusers')->insert(
    ['name' => $request->name, 'surname' => $request->surname, 'year' => $request->year,'image'=>null,
     'email' => $request->email,'password' => $request->password]);
        }
         $socusers = DB::table('socusers')->where('email', $request->email)->where('password', $request->password)->first();
         if($socusers)
       return View('socusers.greeting')->with('socusers',$socusers);
       
    }
}
}
                

           
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         //
          $socusers = socusers::find($id);

       
        return View('socusers.edit')
            ->with('socusers', $socusers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
         if(INPUT::hasfile('file'))
            {
                $file=INPUT::file('file');
                $file->move('uploads',$file->getClientOriginalName());
                 DB::table('socusers')
            ->where('id', $id)
            ->update( ['name' => $request->name, 'surname' => $request->surname, 'year' => $request->year,'image'=>$file->getClientOriginalName(),
     'email' => $request->email,'password' => $request->password]);

               // echo "<img src='uploads/'.$file->getClientOriginalName())";
            }
            else
            {
            DB::table('socusers')
            ->where('id', $id)
            ->update( ['name' => $request->name, 'surname' => $request->surname, 'year' => $request->year,
     'email' => $request->email,'password' => $request->password]);
           /* DB::table('cars')->insert(
    ['name' => $request->name, 'year' => $request->year]);*/
        }
            // redirect
$socusers = DB::table('socusers')->where('email', $request->email)->where('password', $request->password)->first();
            return View('socusers.home')->with('socusers',$socusers);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         DB::table('socusers')->where('id', '=', $id)->delete();

    

        return Redirect('socusers');
    }
}
