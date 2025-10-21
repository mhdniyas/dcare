<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CategoryController extends Controller
{
    /**
     * Get all categories
     */
    public function index(): JsonResponse
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Dental Chairs',
                'slug' => 'dental-chairs',
                'description' => 'Professional dental chairs for modern practices',
                'image' => asset('images/dental.jpg'),
                'product_count' => 45,
                'is_featured' => true
            ],
            [
                'id' => 2,
                'name' => 'Airotors',
                'slug' => 'airotors',
                'description' => 'High-speed dental handpieces',
                'image' => asset('images/brands/1.jpg'),
                'product_count' => 32,
                'is_featured' => true
            ],
            [
                'id' => 3,
                'name' => 'Composite',
                'slug' => 'composite',
                'description' => 'Dental composite materials',
                'image' => asset('images/brands/12.jpg'),
                'product_count' => 28,
                'is_featured' => false
            ],
            [
                'id' => 4,
                'name' => 'Intra Oral Camera',
                'slug' => 'intra-oral-camera',
                'description' => 'Digital dental cameras',
                'image' => asset('images/brands/123.jpg'),
                'product_count' => 18,
                'is_featured' => true
            ],
            [
                'id' => 5,
                'name' => 'Endomotors',
                'slug' => 'endomotors',
                'description' => 'Endodontic motors',
                'image' => asset('images/brands/1.jpg'),
                'product_count' => 24,
                'is_featured' => false
            ],
            [
                'id' => 6,
                'name' => 'Autoclave',
                'slug' => 'autoclave',
                'description' => 'Sterilization equipment',
                'image' => asset('images/brands/12.jpg'),
                'product_count' => 36,
                'is_featured' => true
            ],
            [
                'id' => 7,
                'name' => 'Rotary Files',
                'slug' => 'rotary-files',
                'description' => 'Endodontic rotary files',
                'image' => asset('images/categories/rotary-files.jpg'),
                'product_count' => 52,
                'is_featured' => false
            ],
            [
                'id' => 8,
                'name' => 'Cements',
                'slug' => 'cements',
                'description' => 'Dental cements',
                'image' => asset('images/categories/cements.jpg'),
                'product_count' => 41,
                'is_featured' => false
            ],
            [
                'id' => 9,
                'name' => 'Impression Materials',
                'slug' => 'impression-materials',
                'description' => 'Dental impression materials',
                'image' => asset('images/categories/impression.jpg'),
                'product_count' => 29,
                'is_featured' => false
            ],
            [
                'id' => 10,
                'name' => 'Brackets',
                'slug' => 'brackets',
                'description' => 'Orthodontic brackets',
                'image' => asset('images/categories/brackets.jpg'),
                'product_count' => 67,
                'is_featured' => true
            ],
            [
                'id' => 11,
                'name' => 'Sutures & Needles',
                'slug' => 'sutures-needles',
                'description' => 'Surgical sutures and needles',
                'image' => asset('images/categories/sutures.jpg'),
                'product_count' => 38,
                'is_featured' => false
            ],
            [
                'id' => 12,
                'name' => 'Spare Parts',
                'slug' => 'spare-parts',
                'description' => 'Equipment spare parts',
                'image' => asset('images/categories/spare-parts.jpg'),
                'product_count' => 156,
                'is_featured' => false
            ]
        ];
        
        return response()->json(['categories' => $categories]);
    }
    
    /**
     * Get single category with products
     */
    public function show($id): JsonResponse
    {
        // Mock data - replace with actual database query
        $category = [
            'id' => (int) $id,
            'name' => 'Dental Chairs',
            'slug' => 'dental-chairs',
            'description' => 'Professional dental chairs for modern practices',
            'image' => asset('images/dental.jpg'),
            'product_count' => 45,
            'is_featured' => true,
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Professional Dental Chair Deluxe',
                    'brand' => 'MedTech Pro',
                    'price' => 45000,
                    'originalPrice' => 50000,
                    'discount' => 10,
                    'image' => asset('images/products/dental-chair.jpg'),
                    'rating' => 4.5,
                    'stock' => 'In Stock'
                ],
                [
                    'id' => 13,
                    'name' => 'Compact Dental Chair',
                    'brand' => 'DentCare',
                    'price' => 35000,
                    'image' => asset('images/products/dental-chair-compact.jpg'),
                    'rating' => 4.2,
                    'stock' => 'In Stock'
                ],
                [
                    'id' => 14,
                    'name' => 'Mobile Dental Chair',
                    'brand' => 'SurgiMax',
                    'price' => 28000,
                    'image' => asset('images/products/dental-chair-mobile.jpg'),
                    'rating' => 4.0,
                    'stock' => 'Low Stock'
                ]
            ]
        ];
        
        return response()->json($category);
    }
    
    /**
     * Get featured categories
     */
    public function featured(): JsonResponse
    {
        $featuredCategories = [
            [
                'id' => 1,
                'name' => 'Complete Dental Setup',
                'description' => 'Everything you need for a new dental practice',
                'image' => asset('images/featured/dental-setup.jpg'),
                'product_count' => 250,
                'is_special' => true
            ],
            [
                'id' => 2,
                'name' => 'Emergency Medical Kit',
                'description' => 'Essential equipment for emergency care',
                'image' => asset('images/featured/emergency-kit.jpg'),
                'product_count' => 85,
                'is_special' => false
            ],
            [
                'id' => 3,
                'name' => 'Laboratory Equipment',
                'description' => 'Professional lab equipment and supplies',
                'image' => asset('images/featured/lab-equipment.jpg'),
                'product_count' => 120,
                'is_special' => true
            ]
        ];
        
        return response()->json(['categories' => $featuredCategories]);
    }
}
