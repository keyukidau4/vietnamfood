<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable  = [
        'date',
        'voucher',
        'payment',
        'address',
        'user_id',
    ];

    protected $cast = [
        'id'=>'integer',
        'voucher'=>'integer',
        'payment'=>'integer',
        'address'=>'string',
        'user_id'=>'integer',
    ];
}
