<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class BrandController extends Controller
{
    /**
     * Get all brands
     */
    public function index(): JsonResponse
    {
        $brands = [
            [
                'id' => 1,
                'name' => 'MedTech Pro',
                'slug' => 'medtech-pro',
                'logo' => asset('images/brands/1.jpg'),
                'description' => 'Leading manufacturer of dental equipment',
                'product_count' => 45,
                'is_featured' => true
            ],
            [
                'id' => 2,
                'name' => 'DentCare',
                'slug' => 'dentcare',
                'logo' => asset('images/brands/12.jpg'),
                'description' => 'Professional dental solutions',
                'product_count' => 32,
                'is_featured' => true
            ],
            [
                'id' => 3,
                'name' => 'SurgiMax',
                'slug' => 'surgimax',
                'logo' => asset('images/brands/123.jpg'),
                'description' => 'Surgical instruments and equipment',
                'product_count' => 28,
                'is_featured' => false
            ],
            [
                'id' => 4,
                'name' => 'PharmaCore',
                'slug' => 'pharmacore',
                'logo' => asset('images/brands/1.jpg'),
                'description' => 'Pharmaceutical products and supplies',
                'product_count' => 18,
                'is_featured' => true
            ],
            [
                'id' => 5,
                'name' => 'LabTech',
                'slug' => 'labtech',
                'logo' => asset('images/brands/12.jpg'),
                'description' => 'Laboratory equipment specialists',
                'product_count' => 24,
                'is_featured' => false
            ],
            [
                'id' => 6,
                'name' => 'CardioPro',
                'slug' => 'cardiopro',
                'logo' => asset('images/brands/123.jpg'),
                'description' => 'Cardiology and diagnostic equipment',
                'product_count' => 36,
                'is_featured' => true
            ],
            [
                'id' => 7,
                'name' => 'OrthoMax',
                'slug' => 'orthomax',
                'logo' => asset('images/brands/1.jpg'),
                'description' => 'Orthopedic solutions',
                'product_count' => 52,
                'is_featured' => false
            ],
            [
                'id' => 8,
                'name' => 'NeuroTech',
                'slug' => 'neurotech',
                'logo' => asset('images/brands/12.jpg'),
                'description' => 'Neurology equipment and supplies',
                'product_count' => 41,
                'is_featured' => false
            ],
            [
                'id' => 9,
                'name' => 'VitalCare',
                'slug' => 'vitalcare',
                'logo' => asset('images/brands/123.jpg'),
                'description' => 'Vital signs monitoring equipment',
                'product_count' => 29,
                'is_featured' => false
            ],
            [
                'id' => 10,
                'name' => 'MediCore',
                'slug' => 'medicore',
                'logo' => asset('images/brands/1.jpg'),
                'description' => 'Core medical equipment',
                'product_count' => 67,
                'is_featured' => true
            ],
            [
                'id' => 11,
                'name' => 'BioTech',
                'slug' => 'biotech',
                'logo' => asset('images/brands/12.jpg'),
                'description' => 'Biotechnology solutions',
                'product_count' => 38,
                'is_featured' => false
            ],
            [
                'id' => 12,
                'name' => 'HealthMax',
                'slug' => 'healthmax',
                'logo' => asset('images/brands/123.jpg'),
                'description' => 'Comprehensive health solutions',
                'product_count' => 156,
                'is_featured' => false
            ]
        ];
        
        return response()->json(['brands' => $brands]);
    }
    
    /**
     * Get single brand with products
     */
    public function show($id): JsonResponse
    {
        // Mock data - replace with actual database query
        $brand = [
            'id' => (int) $id,
            'name' => 'MedTech Pro',
            'slug' => 'medtech-pro',
            'logo' => asset('images/brands/1.jpg'),
            'description' => 'Leading manufacturer of dental equipment with over 20 years of experience in the medical industry.',
            'product_count' => 45,
            'is_featured' => true,
            'products' => [
                [
                    'id' => 1,
                    'name' => 'Professional Dental Chair Deluxe',
                    'price' => 45000,
                    'originalPrice' => 50000,
                    'discount' => 10,
                    'image' => asset('images/products/dental-chair.jpg'),
                    'rating' => 4.5,
                    'stock' => 'In Stock'
                ],
                [
                    'id' => 15,
                    'name' => 'MedTech Pro Airotor',
                    'price' => 15000,
                    'image' => asset('images/products/medtech-airotor.jpg'),
                    'rating' => 4.3,
                    'stock' => 'In Stock'
                ],
                [
                    'id' => 16,
                    'name' => 'MedTech Pro Autoclave',
                    'price' => 75000,
                    'image' => asset('images/products/medtech-autoclave.jpg'),
                    'rating' => 4.7,
                    'stock' => 'In Stock'
                ]
            ]
        ];
        
        return response()->json($brand);
    }
    
    /**
     * Get featured brands
     */
    public function featured(): JsonResponse
    {
        $featuredBrands = [
            [
                'id' => 1,
                'name' => 'MedTech Pro',
                'logo' => asset('images/brands/1.jpg'),
                'product_count' => 45
            ],
            [
                'id' => 2,
                'name' => 'DentCare',
                'logo' => asset('images/brands/12.jpg'),
                'product_count' => 32
            ],
            [
                'id' => 3,
                'name' => 'SurgiMax',
                'logo' => asset('images/brands/123.jpg'),
                'product_count' => 28
            ],
            [
                'id' => 4,
                'name' => 'PharmaCore',
                'logo' => asset('images/brands/1.jpg'),
                'product_count' => 18
            ],
            [
                'id' => 5,
                'name' => 'LabTech',
                'logo' => asset('images/brands/12.jpg'),
                'product_count' => 24
            ],
            [
                'id' => 6,
                'name' => 'CardioPro',
                'logo' => asset('images/brands/123.jpg'),
                'product_count' => 36
            ]
        ];
        
        return response()->json(['brands' => $featuredBrands]);
    }
}
