@extends('layouts.app')

@section("content")
    <div class="wrapper create-pizza bg-gray-100 dark:bg-gray-900">
        <h1>Create a new pizza</h1>
        <form action="/pizzas" method="POST">
            @csrf
            <label for="name">Your name:</label>
            <input for="text" id="name" name="name">

            <label class="type">Choose pizza type</label>
            <select name="type" id="type">
                <option value="margarita">Margarita</option>
                <option value="hawaiian">Hawaiian</option>
                <option value="veg supreme">Veg supreme</option>
                <option value="volcano">Vocalno</option>
            </select>

            <label class="base">Choose pizza base</label>
            <select name="base" id="base">
                <option value="cheesy crust">Cheesy Crust</option>
                <option value="garlic crust">Garlic Crust</option>
                <option value="thin & crispy">Thin & Crispy</option>
                <option value="Thick">Thick</option>
            </select>

            <fieldset>
                <label>Extra toppings:</label>
                <input type="checkbox" name="toppings[]" value="mushrooms">Mushrooms <br>
                <input type="checkbox" name="toppings[]" value="peppers">Peppers <br>
                <input type="checkbox" name="toppings[]" value="olives">Olives <br>
                <input type="checkbox" name="toppings[]" value="garlic">Garlic <br>
            </fieldset>

            <input type="submit" value="Order pizza">

        </form>
    </div>
@endsection
