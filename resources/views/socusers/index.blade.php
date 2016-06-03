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

<h1>All Users</h1>

<table class="table table-striped table-bordered">
    <thead>
        <tr style="background-color:#e1e1e1;">
            <td >ID</td>
            <td>Name</td>
             <td>Surname</td>
            <td>Year</td>
             <td>Email</td>
            <td>Image</td>
           
        </tr>
    </thead>
    <tbody>

    @foreach($socusers as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name }}</td>
            <td>{{ $value->surname }}</td>
            <td>{{ $value->year }}</td>
            <td>{{ $value->email }}</td>
             <td><img width="50" height="50" src="uploads/{{$value->image }}"></td>
   
            
            <!--    <a class="btn btn-small btn-info" href="{{ URL::to('cars/' . $value->id) }}">Show this Car</a>
                <a class="btn btn-small btn-warning" href="{{ URL::to('cars/' . $value->id . '/edit') }}">Edit this Car</a>
                 {!! Form::open(array('url' => 'cars/' . $value->id, 'class' => 'pull-left')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this Car', array('class' => 'btn  btn-small btn-danger')) !!}-->

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                {!! Form::close() !!}
            


            
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>