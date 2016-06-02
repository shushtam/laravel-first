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

Route::get('/', function () {
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
/*Route::get('/form',function(){
   return view('form');
});*/

/////////form//////////////
/*Route::get('form', 
  ['as' => 'form', 'uses' => 'formController@create']);
Route::post('form', 
  ['as' => 'form_store', 'uses' => 'formController@store']);

Route::get('contact', 
  ['as' => 'contact', 'uses' => 'ContactController@index']);

Route::get('car', 
  ['as' => 'car', 'uses' => 'CarController@index']);

Route::get('/car/{car}', 
  ['as' => 'car', 'uses' => 'CarController@show']);
Route::get('/car/delete/{car}', ['as' => 'car', 'uses' => 'CarController@destroy'] );*/




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
