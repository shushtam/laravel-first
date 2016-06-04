@extends('layout')
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{!! URL::to('socusers') !!}">Socusers</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('socusers') !!}">View All Socusers</a></li>

    </ul>
</nav>

<h1>Welcome, please sign in or create account to continue</h1>
 <a  href="{!! URL::to('login') !!}"> {!! Form::button('Login!', array('class' => 'btn btn-success')) !!}</a>
  <a  href="{!! URL::to('signin') !!}"> {!! Form::button('Sign up!', array('class' => 'btn btn-danger')) !!}</a>
  <br>
  <br>
  {!! Form::open(array('url' => 'socusers','method'=>'POST','files'=>true)) !!} 
  <a  href="{!! URL::to('socusers') !!}"> {!! Form::button('View all users!', array('class' => 'btn btn-info')) !!}</a>


</div>
</body>
</html>