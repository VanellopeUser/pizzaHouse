@extends('layouts.app')
@section('content')
    <div class="wrapper pizza-details">
        <h1 class="name">Order for {{ $pizza->name }}</h1>
        <p class="type">Type - {{ $pizza->type }}</p>
        <p class="base">Base - {{ $pizza->base }}</p>
        <p class="toppings">Extra Topping:</p>
        <ul>
            @foreach ( $pizza->toppings as $toppings )
             <li>{{$toppings}}</li>   
            @endforeach
        </ul>
        <form action="{{route('pizzas.destroy', $pizza->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button>Complete Order</button>
        </form>
    </div>
    <a href="/pizzas" class="back"><- Back to all Pizzas</a>
    {{-- }} <div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Pizza List - {{ $id }}
        </div>
    </div>
</div> --}}
@endsection
