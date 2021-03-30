@extends('layouts/app')
@section('content')
    



<div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
        <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
            <h1 class="title"> Pizza</h1>
        
        </div>
        <p class="msg"> {{session('msg')}}</p>
        <img src="/img/1.jpeg" alt="image" width="300">

        <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <div class="p-6">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="/pizza/create"
                                class="underline text-gray-900 dark:text-white">Order</a></div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Order Pizza
                        </div>
                    </div>
                </div>

                <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                    <div class="flex items-center">
                        <div class="ml-4 text-lg leading-7 font-semibold"><a href="#"
                                class="underline text-gray-900 dark:text-white">Details</a></div>
                    </div>
                    <div class="ml-12">
                        <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                            Viwe Pizza Details
                        </div>
                    </div>
                </div>

            


            </div>
        </div>


    </div>
</div>
@endsection