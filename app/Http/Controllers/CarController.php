<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Car;
use App\views\cars;
use DB;
use Flash;
use Session;
use Input;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
           $cars = Car::all();

        // load the view and pass the nerds
        return View('cars.index')
            ->with('cars', $cars);
    }

    /**
     * Show the form for creating a new resource.

     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
         
         return View('cars.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
   
            // store
           /* $car = new Car;
            DB::table('cars')
            ->where('id', 1)
            ->update(['votes' => 1]);*/
         /*   DB::table('cars')->insert(
    ['name' => $request->name, 'year' =>$request->year]);*/

              /* $request->input($car->year,'year');
               $request->input($car->name,'name');
            $car->save();*/

            // redirect
        /*    DB::insert('insert into cars  values ($request->name,$request->year');
            Session('message', 'Successfully created car!');*/
            if(INPUT::hasfile('file'))
            {
                echo "file";
                $file=INPUT::file('file');
                $file->move('uploads',$file->getClientOriginalName());
                            DB::table('cars')->insert(
    ['name' => $request->name, 'year' => $request->year,'image'=>$file->getClientOriginalName()]);

               // echo "<img src='uploads/'.$file->getClientOriginalName())";
            }
            else
            {
            DB::table('cars')->insert(
    ['name' => $request->name, 'year' => $request->year,'image'=>null]);
        }

            return Redirect('cars');
    
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
        $car = Car::find($id);
        if( $car)
        {
        // show the view and pass the nerd to it
        return View('cars.show')
            ->with('car', $car);
        }
            else
                return View('cars.shownotfound');
            
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
          $car = Car::find($id);

        // show the edit form and pass the nerd
        return View('cars.edit')
            ->with('car', $car);

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

            // store
          /*  $car = Car::find($id);
             $request->input($car->year,'year');
               $request->input($car->name,'name');
    
            $car->save();*/
             if(INPUT::hasfile('file'))
            {
                $file=INPUT::file('file');
                $file->move('uploads',$file->getClientOriginalName());
                 DB::table('cars')
            ->where('id', $id)
            ->update(['name' => $request->name,'year'=>$request->year,'image'=>$file->getClientOriginalName()]);

               // echo "<img src='uploads/'.$file->getClientOriginalName())";
            }
            else
            {
            DB::table('cars')
            ->where('id', $id)
            ->update(['name' => $request->name,'year'=>$request->year]);
           /* DB::table('cars')->insert(
    ['name' => $request->name, 'year' => $request->year]);*/
        }
            // redirect
            Session('message', 'Successfully updated car!');
            return Redirect('cars');
        
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
        DB::table('cars')->where('id', '=', $id)->delete();

        // redirect
       Session::flash('message','Successfully deleted the car!');
         //flash()->success('You have been logged out.');

        return Redirect('cars');
    }
}