<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kebab extends Model
{
    use HasFactory;
    // lint to database table
    protected $table = "kebabs";
}