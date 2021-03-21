@extends('layouts/layout')
@section('content')

<div class="wrapper pizza-details">

    <h1> Order for {{$pizza->name}}</h1>
    <p class="type">
        TYPE - {{$pizza->type}}
    </p>
    <p class="base"> base - {{$pizza->base}} </p>
</div>
<a href="/pizza" class="back"> Back to all Pizzas</a>
@endsection