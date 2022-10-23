<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pizza extends Model
{
    use HasFactory;
    // link with this database
    protected $table = "pizza";

    // topping Json into array 
    protected $casts = [
        "toppings" => "array"
    ];
}
