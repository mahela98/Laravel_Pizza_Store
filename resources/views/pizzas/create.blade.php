@extends('layouts/app')
@section('content')

<div class="wrapper create-pizza">
    <h1>Create a new pizza</h1>
    <form action="/pizza" method="post">
        @csrf
        <label for="name">Your Name</label>
        <input type="text" id="name" name="name">
        <label for="type"> Choose Pizza Type</label>
        <select name="type" id="type">
            <option value="margarita">Margarita</option>
            <option value="hawaiian">Hawaiian</option>
            <option value="veg supreme">Veg Supreme</option>
            <option value="volcano">volcano</option>
        </select>
        <label for="base"> Choose Pizza Type</label>
        <select name="base" id="base">
            <option value="cheesy crust">Cheesy Crust</option>
            <option value="garlic crust">Garlic Crust</option>
            <option value="thin & crispy">Thin & Crispy</option>
            <option value="thick">Thick</option>
        </select>
        <fieldset>
            <label>Extra topping : </label>
            <input type="checkbox" name="toppings[]" value="mashrooms" id="">mashrooms <br>
            <input type="checkbox" name="toppings[]" value="pappers" id="">pappers <br>
            <input type="checkbox" name="toppings[]" value="garlic" id="">garlic <br>
            <input type="checkbox" name="toppings[]" value="olives" id="">olives <br>

        </fieldset>

        <input type="submit" value="Order Pizza">
    </form>
</div>


@endsection