@extends('layouts.layouts')
@section('content')
    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="content">
            <img src="/img/pizzas.jpg" alt="pizza house logo">
            <div class="title m-b-md">
                The North's Best Pizzas
            </div>
            <p class="mssg">{{session('mssg')}}</p>
            <a href="{{route('pizzas.create')}}">Click Here to Order Your Pizza</a>
        </div>
    </div>
@endsection
