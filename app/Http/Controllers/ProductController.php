<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class ProductController extends Controller
{
    /**
     * Display a listing of products.
     */
    public function index(): View
    {
        return view('pages.products');
    }

    /**
     * Display the specified product.
     */
    public function show(string $slug): View
    {
        // In a real application, you would fetch the product by slug
        // $product = Product::where('slug', $slug)->firstOrFail();
        
        return view('pages.product', compact('slug'));
    }
}