<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Support\Facades\Log;

class PizzaController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }
    public function index()
    {
        // $pizzas = [
        //   ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        //   ['type' => 'volcano', 'base' => 'garlic crust'],
        //   ['type' => 'veg supreme', 'base' => 'thin & crispy']
        // ];

        //$pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('name','desc')->get();
        //$pizzas = Pizza::where('type','hawaiian')->get();
        Log::channel('errorlog')->info('Something happened!');
        // Log::info('This is some useful information.');
        $pizzas = Pizza::latest()->get();

        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);

        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create()
    {
        return view('pizzas.create');
    }

    public function store()
    {
        //dd(request('name'));
        //dd(request('type'));
        // dd(request('base'));
        // error_log(request('name'));

        $pizza = new Pizza();

        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        //dd($pizza);
        //dd(request('toppings'));
        //return request('toppings');
        //Log::channel('stderr')->info(request('name'));
        $pizza->save();
        return redirect('/')->with('mssg', 'Thanks for Your Order!');
    }

    public function destroy($id){
        // dd('masuk');
        $pizza = Pizza::findOrFail($id);
        $pizza ->delete();
        return redirect('/pizzas');
    }
}
