@extends('layouts.base')

@section('body')
    @include('components.navbar')
    @yield('content')

    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
