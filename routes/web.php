<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CartController;

// Main Pages
Route::get('/', function () {
    return view('pages.dcare-home');
});

// API Routes
Route::prefix('api')->group(function () {
    // Search endpoints
    Route::get('/search', [SearchController::class, 'index']);
    Route::get('/search/suggestions', [SearchController::class, 'suggestions']);
    Route::get('/search/results', [SearchController::class, 'results']);
    
    // Product endpoints
    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/featured', [ProductController::class, 'featured']);
    Route::get('/products/{id}', [ProductController::class, 'show']);
    
    // Category endpoints
    Route::get('/categories', [CategoryController::class, 'index']);
    Route::get('/categories/featured', [CategoryController::class, 'featured']);
    Route::get('/categories/{id}', [CategoryController::class, 'show']);
    
    // Brand endpoints
    Route::get('/brands', [BrandController::class, 'index']);
    Route::get('/brands/featured', [BrandController::class, 'featured']);
    Route::get('/brands/{id}', [BrandController::class, 'show']);
    
    // Cart endpoints
    Route::get('/cart', [CartController::class, 'index']);
    Route::post('/cart/add', [CartController::class, 'add']);
    Route::put('/cart/{id}', [CartController::class, 'update']);
    Route::delete('/cart/{id}', [CartController::class, 'remove']);
    Route::delete('/cart', [CartController::class, 'clear']);
});

Route::get('/categories', function () {
    return view('pages.categories');
});

Route::get('/marketplace', function () {
    return view('pages.marketplace');
});

Route::get('/product', function () {
    return view('pages.product');
});

Route::get('/about-us', function () {
    return view('pages.about');
});

Route::get('/contact-us', function () {
    return view('pages.contact');
});

Route::get('/hospital-products', function () {
    return view('categories.hospital');
});

Route::get('/clinic-products', function () {
    return view('categories.clinic');
});

Route::get('/dental-clinic-products', function () {
    return view('categories.dental');
});

Route::get('/quote', function () {
    return view('pages.quote');
});
