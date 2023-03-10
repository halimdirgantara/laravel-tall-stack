@extends('layouts.base')

@section('body')
    <div class="flex flex-col justify-center min-h-screen py-12 px-12 bg-gray-50 sm:px-6 lg:px-8">
        @include('components.navbar')
        @include('components.sidebar')
        @yield('content')

        @isset($slot)
            {{ $slot }}
        @endisset
    </div>
@endsection
