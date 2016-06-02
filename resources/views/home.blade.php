

<!DOCTYPE html>
<html>
<head>
</head>
<body>

@extends('layouts.app')
@extends('layout')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                       

@if(Session::has('flash_message'))
    <div class="alert alert-success"><em> {!! session('flash_message') !!}</em></div>
@endif

                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
</html>