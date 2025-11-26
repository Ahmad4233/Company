<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Specific routes pehle
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioDetail'])->name('portfolio.detail');
// routes/web.php
Route::get('/services', [PageController::class, 'services'])->name('services');

// Dynamic pages baad mein (catch-all)
Route::get('/{pageName}', [PageController::class, 'show'])->name('pages.show');
