<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model {
    use HasFactory;

    protected $fillable = [
        'title', 'slug', 'description', 'image', 'category', 'url', 'is_featured'
    ];

    protected $casts = [
        'is_featured' => 'boolean'
    ];

    public function scopeFeatured($q) {
        return $q->where('is_featured', true);
    }
}