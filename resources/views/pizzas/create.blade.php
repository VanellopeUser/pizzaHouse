@extends('layouts.app')
@section('content')
{{--<div class="flex-center position-ref full-height">
    <div class="content">
        <div class="title m-b-md">
            Add New Pizza
        </div>
    </div>
</div>--}}
<div class="wrapper create-pizza">
    <h1>Create New Pizza</h1>
    <form action ="/pizzas" method="POST">
        @csrf
    <label for="name">Your Name</label><br>
    <input type="text" id="name" name="name"><br><br>
    <label for="type">Choose Pizza Type:</label><br>
    <select name="type" id="type"><br><br>
        <option value="magarita">Magarita</option>
        <option value="hawaiian">Hawaiian</option>
        <option value="veg supreme">Veg Supreme</option>
        <option value="volcano">Volcano</option>
    </select><br><br>

    <label for="base">Choose Pizza Base:</label><br>
    <select name="base" id="base">
        <option value="chessy crust">Chessy Crust</option>
        <option value="garlic crust">Garlic Crust</option>
        <option value="thin&crispy">Thin&Crispy</option>
        <option value="Thick">Thick</option>
    </select><br><br>
    <fieldset>
        <label>Extra Toppings</label><br>
        <input type="checkbox" name="toppings[]" value="mushrooms" >Mushroom<br>
        <input type="checkbox" name="toppings[]" value="peppers" >Peppers<br>
        <input type="checkbox" name="toppings[]" value="pineapple" >Pineapple<br>
        <input type="checkbox" name="toppings[]" value="olive" >Olive<br>
    </fieldset>
    <input type="submit" value="Order Pizza">
</form>
</div>
@endsection
