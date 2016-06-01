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


//////////////////////////////

/*Route::get('/', function () {
    //
});


Route::post('/task', function (Request $request) {
    //
});


Route::delete('/task/{task}', function (Task $task) {
    //
});
Route::get('/', function () {
    return view('tasks');
});
Route::post('/task', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|max:255',
    ]);

    if ($validator->fails()) {
        return redirect('/')
            ->withInput()
            ->withErrors($validator);
    }

    $task = new Task;
    $task->name = $request->name;
    $task->save();

    return redirect('/');
});

Route::get('/task', function () {
    $tasks = Task::orderBy('created_at', 'asc')->get();

    return view('tasks', [
        'tasks' => $tasks
    ]);
});
Route::delete('/task/{task}', function (Task $task) {
    $task->delete();

    return redirect('/');
});
*/

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
