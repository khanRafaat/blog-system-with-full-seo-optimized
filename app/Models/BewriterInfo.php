<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BewriterInfo extends Model
{
    use HasFactory;

    
    protected $fillable = [
        'name',
        'email',
        'dob',
        'phone',
        'country',
        'comments',
        'status',

    ];
}
