<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'description',
        'image',
        'gallery',
        'category',
        'client',
        'project_date',
        'project_url',
        'github_url',
        'technologies',
        'challenge',
        'solution',
        'result',
        'views',
        'is_featured',
        'is_active',
        'order'
    ];

    protected $casts = [
        'gallery' => 'array',
        'technologies' => 'array',
        'project_date' => 'date'
    ];

    /**
     * Get active portfolios
     */
    public static function getActivePortfolios()
    {
        return self::where('is_active', true)
                  ->orderBy('order')
                  ->orderBy('created_at', 'desc')
                  ->get();
    }

    /**
     * Get featured portfolios
     */
    public static function getFeaturedPortfolios()
    {
        return self::where('is_active', true)
                  ->where('is_featured', true)
                  ->orderBy('order')
                  ->orderBy('created_at', 'desc')
                  ->get();
    }

    /**
     * Get portfolios by category
     */
    public static function getByCategory($category)
    {
        return self::where('is_active', true)
                  ->where('category', $category)
                  ->orderBy('order')
                  ->orderBy('created_at', 'desc')
                  ->get();
    }

    /**
     * Increment views
     */
    public function incrementViews()
    {
        $this->increment('views');
    }
}
