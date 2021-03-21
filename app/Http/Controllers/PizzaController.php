<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pizza;

class PizzaController extends Controller
{
    public function index(){
       
        //get all from the database
            // $pizzas = Pizza::all();

            //in a order
            // $pizzas = Pizza::orderBy('name','desc')->get();

            //select
            // $pizzas = Pizza::where('type','havayan')->get();

            //order by the latest 
            $pizzas = Pizza::latest()->get();
        
            $name = request ('name');
        
            return view('pizzas.index' , 
            ['pizzas' => $pizzas,
            'name'=>$name,
            'age'=> request('age')
            ]
            
        );
    }

    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show' , [ 'pizza'=> $pizza]);
    }

    public function create(){
        return view('pizzas.create');
    }
    public function store(){
        request('name');
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        $pizza = new Pizza();
        $pizza->name =  request('name');
        $pizza->type =  request('type');
        $pizza->base =  request('base');

        error_log($pizza);
        $pizza->save();

        //this sends data witha a session
        return redirect('/')->with('msg','Thanks For Your Order') ;
    }

}
