<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_description',
        'hero_image',
        'mission_text',
        'vision_text',
        'values',
        'stats',
        'is_active'
    ];

    protected $casts = [
        'values' => 'array',
        'stats' => 'array'
    ];

    /**
     * Get active about page
     */
    public static function getActiveAboutPage()
    {
        return self::where('is_active', true)->first();
    }
}
