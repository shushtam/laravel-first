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


   

<h1>Showing {{ $car->name }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $car->name }}</h2>
        <p>
            <strong>Year:</strong> {{ $car->year }}<br>
        </p>
        <img width="50" height="50" src="../uploads/{{ $car->image }}" />
    </div>

 <a  href="{!! URL::to('cars') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>
<<<<<<< HEAD
 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
=======
>>>>>>> c7c830092d8ac53514bbbf4f8d51176b0b68b60f
</div>

</body>
</html>