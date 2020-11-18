<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
    ];

    protected $cast = [
        'id' => 'integer',
        'user_id' => 'integer',
    ];

    public static $rule = [
        'user_id' => 'required',
    ];
}
