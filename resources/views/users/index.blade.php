@extends('layouts.myapp')
@section('content')
    <div class="row">
        <div class="col-md-10">
            <h4>hjklç</h4>
        </div>
        <div class="col-md">
            <a href="{{ route('users.create') }}"><p class="btn btn-block btn-primary">Register</p></a>
        </div>
    </div>
    <div class="row">        
        @yield('contentuser')
        <div class="col-md">
            <h1>hjk</h1>
        </div>        
    </div>
@endsection