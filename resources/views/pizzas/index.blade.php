@extends('layouts.app')
@section('content')
    {{-- <div class="flex-center position-ref full-height">
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
        @endif --}}

        {{-- <div class="content">
            <div class="title m-b-md">
                Pizza List
            </div> --}}
            {{-- <p>{{$type}} - {{$base}} - {{$price}}</p>
            @if ($price > 20)
                <p>This pizza is expensive</p>
                @elseif ($price < 10)
                <p>This Pizza is cheap</p>
                @else
                <p>This Pizza is normal price</p>
            @endif

            @unless($base == 'cheesy crust')
            <p>You don't have a cheesy crust</p>
                
            @endunless
            @php
                $name = 'Nasuha';
                echo($name);
            @endphp//

            @for ($i = 0; $i < 5; $i++)
            <p>The value of i is {{$i}}</p>
            @endfor

            @for ($i = 0; $i < count($pizzas); $i++)
                <p>{{$pizzas[$i]['type']}}</P
            @endfor --}}

            {{-- <p>{{$name}}</p>
            <p>{{$age}}</p> --}}
            <div class="wrapper pizza-index">
                <h1>Pizza Order</h1>

            @foreach ($pizzas as $pizza)
                <div class="pizza-item">
                    <img src="/img/pizza.png" alt="pizza icon">
                    <h4><a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a></h4>
                    {{-- {{$loop->index}} - {{$pizza ['type']}} - {{$pizza ['base']}}
                  @if ($loop->first)
                      <span>- First in loop</span>
                  @endif
                  @if ($loop->last)
                      <span>- Last in the loop</span>
                  @endif --}}
                </div>
            @endforeach
        </div>
        {{-- </div>
    </div>
    </body>

    </html> --}}

    @endsection
