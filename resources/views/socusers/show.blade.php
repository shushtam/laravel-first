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


   

<h1>Showing {{ $socusers->name }}</h1>

   
    <div class="jumbotron text-center">
        <h2>{{ $socusers->name }}</h2>
        <p>
            <strong>Surname:</strong> {{ $socusers->surname }}<br>
        </p>
        <p>
            <strong>Email:</strong> {{ $socusers->email }}<br>
        </p>
        <p>
            <strong>Year:</strong> {{ $socusers->year }}<br>
            </p>

        <img width="50" height="50" src="../uploads/{{ $socusers->image }}" />
    </div>

 <a  href="{!! URL::to('socusers') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>

 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


</div>

</body>
</html>