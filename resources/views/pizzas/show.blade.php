@extends('layouts/layout')
@section('content')

<div class="wrapper pizza-details">

    <h1> Order for {{$pizza->name}}</h1>
    <p class="type">
        TYPE - {{$pizza->type}}
    </p>
    <p class="base"> base - {{$pizza->base}} </p>
    <p class="toppings">Extratoppings : </p>
    <ul>
        @foreach ($pizza->toppings as $topping)
        <li>{{$topping}}</li>
        @endforeach
    </ul>
    <form action="/pizza/{{$pizza->id}}" method="post">
    @csrf
    @method('delete')
    <button>Complets Orders</button>
    </form>
</div>
<a href="/pizza" class="back"> Back to all Pizzas</a>
@endsection