<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Api\SearchController;
use App\Http\Controllers\Api\ProductController as ApiProductController;
use App\Http\Controllers\Api\CategoryController as ApiCategoryController;
use App\Http\Controllers\Api\BrandController;
use App\Http\Controllers\Api\CartController;

// Main Application Routes
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product Routes (using slugs)
Route::prefix('products')->name('products.')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('index');
    Route::get('/{product:slug}', [ProductController::class, 'show'])->name('show');
});

// Category Routes (using slugs)
Route::prefix('categories')->name('categories.')->group(function () {
    Route::get('/', [CategoryController::class, 'index'])->name('index');
    Route::get('/hospital', [CategoryController::class, 'hospital'])->name('hospital');
    Route::get('/dental', [CategoryController::class, 'dental'])->name('dental');
    Route::get('/clinic', [CategoryController::class, 'clinic'])->name('clinic');
    Route::get('/{category:slug}', [CategoryController::class, 'show'])->name('show');
});

// Static Pages
Route::prefix('pages')->name('pages.')->group(function () {
    Route::get('/about-us', [PageController::class, 'about'])->name('about');
    Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');
    Route::get('/help', [PageController::class, 'help'])->name('help');
    Route::get('/track-order', [PageController::class, 'trackOrder'])->name('track-order');
});

// Business Routes
Route::get('/quote', [PageController::class, 'quote'])->name('quote');
Route::get('/marketplace', [PageController::class, 'marketplace'])->name('marketplace');

// API Routes
Route::prefix('api')->name('api.')->group(function () {
    // Search endpoints
    Route::prefix('search')->name('search.')->group(function () {
        Route::get('/', [SearchController::class, 'index'])->name('index');
        Route::get('/suggestions', [SearchController::class, 'suggestions'])->name('suggestions');
        Route::get('/results', [SearchController::class, 'results'])->name('results');
    });
    
    // Product endpoints (using UUIDs)
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ApiProductController::class, 'index'])->name('index');
        Route::get('/featured', [ApiProductController::class, 'featured'])->name('featured');
        Route::get('/{product:uuid}', [ApiProductController::class, 'show'])->name('show');
    });
    
    // Category endpoints (using UUIDs)
    Route::prefix('categories')->name('categories.')->group(function () {
        Route::get('/', [ApiCategoryController::class, 'index'])->name('index');
        Route::get('/featured', [ApiCategoryController::class, 'featured'])->name('featured');
        Route::get('/{category:uuid}', [ApiCategoryController::class, 'show'])->name('show');
    });
    
    // Brand endpoints (using UUIDs)
    Route::prefix('brands')->name('brands.')->group(function () {
        Route::get('/', [BrandController::class, 'index'])->name('index');
        Route::get('/featured', [BrandController::class, 'featured'])->name('featured');
        Route::get('/{brand:uuid}', [BrandController::class, 'show'])->name('show');
    });
    
    // Cart endpoints
    Route::prefix('cart')->name('cart.')->group(function () {
        Route::get('/', [CartController::class, 'index'])->name('index');
        Route::post('/add', [CartController::class, 'add'])->name('add');
        Route::put('/{cartItem:uuid}', [CartController::class, 'update'])->name('update');
        Route::delete('/{cartItem:uuid}', [CartController::class, 'remove'])->name('remove');
        Route::delete('/', [CartController::class, 'clear'])->name('clear');
    });
});
