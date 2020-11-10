<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'food_id',
        'user_id',
        'amount',
    ];

    protected $cast = [
        'id' => 'integer',
        'food_id' => 'integer',
        'user_id' => 'integer',
        'amount' => 'integer',
    ];

    public static $rule = [
        'food_id' => 'required',
        'user_id' => 'required',
    ];
}
