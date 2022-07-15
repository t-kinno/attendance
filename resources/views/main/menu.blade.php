@extends('layouts.common')

@if(session('level') === 1)
    @include('main.master')
@else 
    @include('main.normal')
@endif

@section('content')

    @if($level_error !== "")
    <p>{{$level_error}}</p>
    @endif

    <div id="menu">
        @yield('menu')
    </div>
@endsection
