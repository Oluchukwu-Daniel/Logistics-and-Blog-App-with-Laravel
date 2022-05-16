<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setquote extends Model
{
    use HasFactory;
    protected $fillable = [
        'weight_rate',
        'distance_rate',
        'road_rate',
        'air_rate',
        'ocean_rate',
    ];
    
}
