@extends('layouts.common')

@if(session('level') === 1)
    @include('main.master')
@else 
    @include('main.normal')
@endif

@section('content')
    <div id="menu">
        @yield('menu')
    </div>
@endsection
