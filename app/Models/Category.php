<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_name',
        'category_slug',
    ];

    public function blogs()
    {
        return $this->belongsToMany(Blog::class,'blog_category')->where('status','=','active')->withTimestamps();
    }


    
}