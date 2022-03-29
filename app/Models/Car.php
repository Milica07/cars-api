<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    public const ENGINES = [
        'diesel',
        'petrol',
        'electric',
        'hybrid',
    ];

    protected $fillable = [
        'brand',
        'model',
        'year',
        'max_speed',
        'is_automatic',
        'engine',
        'number_of_door',
    ];

    protected $casts = [
        'is_automatic' => 'boolean',
    ];
}
