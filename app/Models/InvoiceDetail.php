<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invoice_detail extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount',
        'price',
        'invoice_id',
        'food_id',
    ];

    protected $cast = [
        'id' => 'integer',
        'amount' => 'integer',
        'price' => 'integer',
        'invoice_id' => 'integer',
        'food_id' => 'integer',
    ];
}
