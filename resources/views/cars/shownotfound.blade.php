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


    <div class="jumbotron text-center">

<h1> Not Found</h1>

</div>
   <a  href="{!! URL::to('cars') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>  


</div>
</body>
</html>