<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    //
    protected $fillable = [
        'description', 
        'date', 
        'value', 
        'type', 
        'status', 
        'payment', 
        'category', 
        'proof', 
        'note',
    ];
}
