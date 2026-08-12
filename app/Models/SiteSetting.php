<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'phone',
        'email',
        'address',
        'logo_path',
        'transparent_logo_path',
    ];

    public static function current(): self
    {
        return static::firstOrCreate([], [
            'phone' => '+1 555 0100',
            'email' => 'hello@ssfmarketing.com',
            'address' => 'SSF Marketing workspace address',
            'logo_path' => 'frontend/assets/images/logo/logo.png',
        ]);
    }
}