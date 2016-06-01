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
        <a class="navbar-brand" href="{!! URL::to('cars') !!}">Car</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{!! URL::to('cars') !!}">View All Cars</a></li>
        <li><a href="{!! URL::to('cars/create') !!}">Create a Car</a>
    </ul>
</nav>

<h1>Create a Car</h1>

{!! Html::ul($errors->all()) !!}

{!! Form::open(array('url' => 'cars','method'=>'POST','files'=>true)) !!}

    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
    </div>

    <div class="form-group">
        {!! Form::label('year', 'Year') !!}
        {!! Form::text('year', null, array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
        {!! Form::label('image', 'Image') !!}
        {!! Form::file('file', null, array('class' => 'form-control')) !!}
    </div> 


    {!! Form::submit('Create the Car!', array('class' => 'btn btn-success')) !!}
  <a  href="{!! URL::to('cars') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>

{!! Form::close() !!}

</div>
</body>
</html>