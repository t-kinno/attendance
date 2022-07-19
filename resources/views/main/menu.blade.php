@extends('layouts.common')

@if(session('level') === 1)
    @include('main.master')
@else 
    @include('main.normal')
@endif

@section('content')

    @if(null !== (session('level_error')))
        <p>{{ session('level_error') }}</p>
    @endif

    <div id="menu">
        @yield('menu')
    </div>
@endsection
