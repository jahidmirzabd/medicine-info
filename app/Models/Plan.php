<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    // Allow mass assignment on these fields
    protected $fillable = [
        'plan_id',
        'name',
        'price',
        'description',
        'features',
    ];

    // Cast 'features' JSON column to array automatically
    protected $casts = [
        'features' => 'array',
    ];
}