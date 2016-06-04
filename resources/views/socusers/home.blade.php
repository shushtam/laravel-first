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
                <div class="panel-heading">Welcome back</div>

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
     <a class="btn btn-small btn-warning" href="{{ URL::to('socusers/' . $socusers->id . '/edit') }}">Edit your profile</a>
 {!! Form::open(array('url' => 'socusers/' . $socusers->id, 'class' => 'pull-right')) !!}
                    {!! Form::hidden('_method', 'DELETE') !!}
                    {!! Form::submit('Delete this profile', array('class' => 'btn  btn-small btn-danger')) !!}

                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


                {!! Form::close() !!}
 <a  href="{!! URL::to('welcome') !!}"> {!! Form::button('Go Back!', array('class' => 'btn btn-primary')) !!}</a>

 <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>
