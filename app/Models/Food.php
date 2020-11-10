<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Contracts\Service\Attribute\Required;

class Food extends Model
{
    use HasFactory;
    protected $table = 'foods';

    protected  $fillable = [
        'namevn',
        'namejp',
        'price',
        'image',
        'status',
    ];

    protected $casts = [
        'id' => 'integer',
        'namevn'=> 'string',
        'namejp'=>'string',
        'price'=>'integer',
        'image'=>'string',
        'status'=>'boolean',
    ];

    public static $rule = [
        'namevn' => 'required',
        'namejp' => 'required',
        'image' => 'mimes:jpeg,jpg,png,svg|required|max:20000',
    ];
}