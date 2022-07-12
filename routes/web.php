<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pizzas', [App\Http\Controllers\PizzaController::class, 'index'])->name('pizzas.index')->middleware('auth');
/*function () {
   //$pizza = ['type' => 'hawaiian','base' => 'garlic','price' => 17 ];
    $pizzas = [
        ['type' => 'hawaiian', 'base' => 'cheesy crust'],
        ['type' => 'volcano', 'base' => 'garlic crust'],
        ['type' => 'veg supreme', 'base' => 'thin & crispy']
    ];


    return view('pizzas',[
         'pizzas' => $pizzas,
         'name' => request('name'),
         'age' => request('age')
         ]);
}*/

Route::get('/pizzas/create',[App\Http\Controllers\PizzaController::class, 'create'])->name('pizzas.create');
Route::post('/pizzas',[App\Http\Controllers\PizzaController::class, 'store'])->name('pizzas.store');
Route::get('/pizzas/{id}',[App\Http\Controllers\PizzaController::class, 'show'])->name('pizzas.show')->middleware('auth');//dia nak bagi website kita secure . so bila nak masuk link ni dia akan suruh kita login dulu bru bole view .
Route::delete('/pizzas/{id}',[App\Http\Controllers\PizzaController::class, 'destroy'])->name('pizzas.destroy')->middleware('auth');


Auth::routes([
    'register'=>false
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
