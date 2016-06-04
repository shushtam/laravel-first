<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/test', function(){
   return view('test');
});
Route::get('/test', function(){
   return view('test',['name'=>'xx']);
});


	Route::resource('cars', 'CarController');
//Route::get('/cars',['uses'=>'CarController@index']);
//Route::get('/about',function(){return view('about');}); //"about";});

Route::get('/people',function(){
	$people=["xx","yy","zz"];
	return view('/people',compact('people'));
}); 
Route::get('/people2','PagesController@home'); 
//Route::get('/about','PagesController@about'); 
Route::get('about',function(){
	return view('about');
});
/*Route::get('/',function(){
	return redirect('login');
});*/

Route::get('age/{age}', function() {
 
})->middleware('age');;
Route::get('name/{name}', function() {
 
})->middleware('name');;

Route::get('/sp', function(){
    Someclass::get();
});
Route::get('/', function () {
    return view('socusers/welcome');
});
Route::get('/welcome', function () {
    return view('socusers/welcome');
});
Route::get('/login', function () {
    return view('socusers/login');
});
Route::get('/signin', function () {
    return view('socusers/signin');
});


Route::resource('socusers', 'SocusersController');
Route::get('/home', function () {
    return view('socusers/home');
});
