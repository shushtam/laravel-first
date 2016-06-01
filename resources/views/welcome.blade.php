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

                <div class="panel-body">
                @if (Auth::check())

                   <a  href=" {!! URL::to('cars') !!}"> 
                   {!! Form::button('Watch car list!', array('class' => 'btn btn-success')) !!}</a>
                @else
                        <a  href=" {!! URL::to('login') !!}"> 
                   {!! Form::button('Watch car list!', array('class' => 'btn btn-success')) !!}</a>
                   @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
