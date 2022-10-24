<?php

namespace App\Http\Controllers;
namespace Illuminate\Support\Facades\Auth;;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\HomeController;



Route::get('/', function () {
    return view('welcome');
});


// pizza routes
Route::get('/pizzas',[PizzaController::class, "index"])-> middleware('auth');
// Route::get('/pizzas',"App\Http\Controllers\PizzaController@index"); --- or this without the namespace

Route::get('/pizzas/create',[PizzaController::class, "create"]);

Route::post('/pizzas',[PizzaController::class, "store"]);

Route::get('/pizzas/{id}',[PizzaController::class, "show"])->middleware('auth');
// Route::get('/pizzas/{id}',"App\Http\Controllers\PizzaController@show"); ---- or this without the namespace

Route::delete('/pizzas/{id}',[PizzaController::class, "destroy"])->middleware('auth');

// end of pizza routes


Auth::routes([
    "register" => false,
]);

Route::get('/home',[HomeController::class, "index"])->name('home');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
