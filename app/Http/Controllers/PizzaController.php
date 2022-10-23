<?php

namespace App\Http\Controllers;
use App\Models\Pizza;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function indexx(){
        // $pizza = [
        //     ["name" => "frank", "base" => 17, "type" => "it is frank"],
        //     ["name" => "james", "base" => 17, "type" => "it is james"],
        //     ["name" => "william", "base" => 17, "type" => "it is william"]];

        
        // $pizzas = Pizza::orderBy("name","desc")->get();
        // $pizzas = Pizza::where("type","hawaiian")->get();
        $pizzas = Pizza:: all();  
        return view('pizzas.indexx', ["pizzas" => $pizzas]);
        
    }


    
    public function show($id){
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show',["pizza" => $pizza]);
    }


    public function create(){
        return view('pizzas.create');
    }

    public function destroy($id){
        $pizza = Pizza::findOrfail($id);
        $pizza -> delete();
        return redirect("/pizzas");
    }

    public function store(){
        $pizza = new Pizza();
        $pizza -> name = request("name");
        $pizza -> type = request("type");
        $pizza -> base = request("base");
        $pizza -> toppings = request("toppings");
        $customer = $pizza["name"];
        $pizza->save();
        return redirect("/")-> with("mssg","Thank you ${customer} for your order");
    }
}
