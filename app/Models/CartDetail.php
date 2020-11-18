<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CartDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'cart_id','food_id','amount',
    ];

    protected $cast = [
        'id' => 'integer',
        'cart_id' => 'integer',
        'food_id' => 'integer',
        'amount' => 'integer',
    ];

    public static $rule = [
        'food_id' => 'required',
    ];
}
