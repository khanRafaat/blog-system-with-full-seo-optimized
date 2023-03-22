<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\SoftDeletes;
class Blog extends Model
{
    use HasFactory, SoftDeletes;
    
    protected static function boot() {
        parent::boot();

        static::creating(function ($question) {
            $question->slug = Str::slug($question->slug);
        });
    }

    protected $fillable = [
        'title',
        'category_id',
        'slug',
        'image',
        'summary',
        'description',
        'imagealt',
        'keywords',
        'thumbnail',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function categories()
    {
        return $this->belongsToMany(Category::class,'blog_category')->withTimestamps();
    }
}
