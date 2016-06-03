@extends('layout')

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
        <script src="validate.js"></script>
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
        @if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<h1>Sign in!!!</h1>

{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => 'socusers','method'=>'POST','files'=>true)) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, array('class' => 'form-control','id'=>'name')) !!}
    </div>
      <div class="form-group">
        {!! Form::label('surname', 'Surname') !!}
        {!! Form::text('surname', null, array('class' => 'form-control', 'id'=>'surname')) !!}
    </div>
    
      <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('year', 'Year') !!}
        {!! Form::text('year', null, array('class' => 'form-control')) !!}
    </div>
     <div class="form-group">
        {!! Form::label('password', 'Password') !!}
        <br>
        {!! Form::password('password', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('file', null, array('class' => 'form-control')) !!}
    </div> 


    {!! Form::submit('Sign in!', array('class' => 'btn btn-success', 'onclick'=>'check()')) !!}
  <a  href="{!! URL::to('welcome') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>

  <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">



{!! Form::close() !!}
 </div>
</div>
</body>
</html>