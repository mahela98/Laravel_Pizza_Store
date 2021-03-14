<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index(){
       
        
            $pizzas =[
                ['type' => 'hawaiian' , 'base' =>'cheesy crust'],
                ['type' => 'volcano' , 'base' =>'garlic crust'],
                ['type' => 'veg suprem' , 'base' =>'thin and crispy'],
            ];
        
            $name = request ('name');
        
            return view('pizza' , 
            ['pizzas' => $pizzas,
            'name'=>$name,
            'age'=> request('age')
            ]
            
        );
    }

    public function show($id){
        return view('details' , [ 'id'=> $id]);

    }
}
