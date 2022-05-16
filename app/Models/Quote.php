<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'weight',
        'pick_up',
        'drop_off',
        'distance',
        'freight_type',
        'estimate',
        'status'
    ];

    public function user (){

        return $this->belongsTo(User::class);
       
    }

    public function track(){
        return $this->hasMany(Tracking_id::class);
    }

    
}
