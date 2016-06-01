<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">

  <script src="javas.js" ></script>
    </head>
    <body>
@extends('layouts.app')
@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>
                  <div class="well">Please log in to see all cars!!!</div>

                <div class="panel-body">
               
               <form role="form" method ="POST" action="logincheck">
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name"  />    
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" />
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
   <a  href="{!! URL::to('logincheck') !!}"> {!! Form::submit('Login', array('class' => 'btn btn-success')) !!}</a>
</form>
<div class="well">
              <a  href="{!! URL::to('cars') !!}"> {!! Form::button('or Sign up!', array('class' => 'btn btn-success')) !!}</a>

              </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>