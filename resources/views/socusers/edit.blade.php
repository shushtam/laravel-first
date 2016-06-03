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
        <a class="navbar-brand" href="{!! URL::to('socusers') !!}">Users</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('socusers') !!}">View All Users</a></li>

    </ul>
</nav>

<h1>Edit {!! $socusers->name !!}</h1>


{!! Html::ul($errors->all()) !!}

{!! Form::model($socusers, array('route' => array('socusers.update', $socusers->id), 'method' => 'PUT','files'=>true)) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

   <div class="form-group">
        {!! Form::label('surname', 'Surname') !!}
        {!! Form::text('surname', null, array('class' => 'form-control')) !!}
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


    {!! Form::submit('Edit the Profile!', array('class' => 'btn btn-success')) !!}
     <a  href="{!! URL::to('socusers') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>

     <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">



{!! Form::close() !!}

</div>
</body>
</html>