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

<h1>All the Cars</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr style="background-color:#e1e1e1;">
            <td >ID</td>
            <td>Name</td>
            <td>Year</td>
            <td></td>
            <td class="text-danger">Change</td>
        </tr>
    </thead>
    <tbody>

    @foreach($cars as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->year }}</td>
             <td><img width="50" height="50" src="uploads/{{$value->image }}"></td>
   
            <td>
                <a class="btn btn-small btn-info" href="{{ URL::to('cars/' . $value->id) }}">Show this Car</a>
                <a class="btn btn-small btn-warning" href="{{ URL::to('cars/' . $value->id . '/edit') }}">Edit this Car</a>
                 {!! Form::open(array('url' => 'cars/' . $value->id, 'class' => 'pull-left')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Car', array('class' => 'btn  btn-small btn-danger')) !!}
<<<<<<< HEAD
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
=======
>>>>>>> c7c830092d8ac53514bbbf4f8d51176b0b68b60f
                {!! Form::close() !!}
            


            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>