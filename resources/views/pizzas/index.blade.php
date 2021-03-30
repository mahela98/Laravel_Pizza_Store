@extends('layouts/app')
@section('content')




{{-- @for($i=0; $i< count($pizzas); $i++) <p> {{$pizzas[$i]['type']}} </p>
@endfor --}}


<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1> Pizza Orders</h1>
        </div>
        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                @foreach($pizzas as $pizza)
                <a href="/pizza/{{$pizza->id}}">
                <div class="pizzasss">
                  {{$pizza->name}} - {{$pizza->type}} - {{$pizza->base}}
                </div>
            </a>
                @endforeach
           
        </div>


    </div>
</div>


@endsection