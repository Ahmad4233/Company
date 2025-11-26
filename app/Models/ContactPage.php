<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactPage extends Model
{
    use HasFactory;

    protected $fillable = [
        'hero_title',
        'hero_description',
        'hero_image',
        'contact_info',
        'form_title',
        'form_description',
        'map_embed',
        'is_active'
    ];

    protected $casts = [
        'contact_info' => 'array'
    ];

    /**
     * Get active contact page
     */
    public static function getActiveContactPage()
    {
        return self::where('is_active', true)->first();
    }
}
