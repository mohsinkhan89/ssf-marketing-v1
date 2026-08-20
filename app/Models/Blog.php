<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'description',
        'status',
        'card_img',
        'banner_img',
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
}