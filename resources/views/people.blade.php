@extends('layouts.app')
@extends('layout') 
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">
                @if(empty($people))
                is empty;
                @else
                not empty;
                @endif
                 @foreach($people as $p)
                <li>{{$p }}</li>
               @endforeach 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
