<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tracking_id extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'unique_id',
        'status',
    ];

    // public function track
}
