<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    use HasFactory;
    protected $table = 'foodtypes';

    public $fillable = [
        'name',
    ];

    public static $rule = [
        'name' => 'required',
    ];

    public function foods()
    {
        return $this->hasMany('App\Models\Food', 'foodtype');
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($foodtypes) {
            $foodtypes->foods()->delete();
        });
    }
}
