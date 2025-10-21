<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class ProductController extends Controller
{
    /**
     * Get all products with filtering and pagination
     */
    public function index(Request $request): JsonResponse
    {
        $page = $request->get('page', 1);
        $perPage = $request->get('per_page', 12);
        $category = $request->get('category');
        $brand = $request->get('brand');
        $priceMin = $request->get('price_min');
        $priceMax = $request->get('price_max');
        $sortBy = $request->get('sort_by', 'name');
        $sortOrder = $request->get('sort_order', 'asc');
        
        // Mock data - replace with actual database queries
        $products = [
            [
                'id' => 1,
                'name' => 'Professional Dental Chair Deluxe',
                'brand' => 'MedTech Pro',
                'category' => 'dental',
                'price' => 45000,
                'originalPrice' => 50000,
                'discount' => 10,
                'image' => asset('images/dental.jpg'),
                'description' => 'Advanced dental chair with ergonomic design, LED lighting, and integrated suction system.',
                'rating' => 4.5,
                'stock' => 'In Stock',
                'sku' => 'DC-001',
                'warranty' => '2 Years',
                'isNew' => true,
                'isFeatured' => true,
                'created_at' => '2024-01-15'
            ],
            [
                'id' => 2,
                'name' => 'High-Speed Surgical Airotor',
                'brand' => 'DentCare',
                'category' => 'dental',
                'price' => 12500,
                'image' => asset('images/brands/1.jpg'),
                'description' => 'Precision surgical handpiece with variable speed control and ergonomic grip.',
                'rating' => 4.3,
                'stock' => 'In Stock',
                'sku' => 'AR-002',
                'warranty' => '1 Year',
                'isNew' => false,
                'isFeatured' => true,
                'created_at' => '2024-01-10'
            ],
            [
                'id' => 3,
                'name' => 'Class B Autoclave Sterilizer',
                'brand' => 'SurgiMax',
                'category' => 'sterilization',
                'price' => 85000,
                'originalPrice' => 95000,
                'discount' => 11,
                'image' => asset('images/brands/12.jpg'),
                'description' => 'Professional sterilization equipment with digital controls and safety features.',
                'rating' => 4.7,
                'stock' => 'In Stock',
                'sku' => 'AC-003',
                'warranty' => '3 Years',
                'isNew' => false,
                'isFeatured' => false,
                'created_at' => '2024-01-05'
            ],
            [
                'id' => 4,
                'name' => 'HD Intra Oral Camera',
                'brand' => 'PharmaCore',
                'category' => 'diagnostic',
                'price' => 25000,
                'image' => asset('images/brands/123.jpg'),
                'description' => 'High-definition digital camera for intraoral imaging with LED illumination.',
                'rating' => 4.4,
                'stock' => 'Low Stock',
                'sku' => 'IC-004',
                'warranty' => '2 Years',
                'isNew' => true,
                'isFeatured' => false,
                'created_at' => '2024-01-20'
            ],
            [
                'id' => 5,
                'name' => 'Endodontic Motor System',
                'brand' => 'LabTech',
                'category' => 'endodontics',
                'price' => 35000,
                'image' => asset('images/brands/1.jpg'),
                'description' => 'Advanced endodontic motor with torque control and apex locator integration.',
                'rating' => 4.6,
                'stock' => 'In Stock',
                'sku' => 'EM-005',
                'warranty' => '2 Years',
                'isNew' => false,
                'isFeatured' => true,
                'created_at' => '2024-01-12'
            ],
            [
                'id' => 6,
                'name' => 'Composite Resin Kit',
                'brand' => 'CardioPro',
                'category' => 'materials',
                'price' => 2500,
                'image' => asset('images/brands/12.jpg'),
                'description' => 'Universal composite resin kit with multiple shades and curing light.',
                'rating' => 4.2,
                'stock' => 'In Stock',
                'sku' => 'CR-006',
                'warranty' => '1 Year',
                'isNew' => false,
                'isFeatured' => false,
                'created_at' => '2024-01-08'
            ]
        ];
        
        // Apply filters
        if ($category) {
            $products = array_filter($products, function($product) use ($category) {
                return $product['category'] === $category;
            });
        }
        
        if ($brand) {
            $products = array_filter($products, function($product) use ($brand) {
                return strtolower(str_replace(' ', '-', $product['brand'])) === $brand;
            });
        }
        
        if ($priceMin || $priceMax) {
            $products = array_filter($products, function($product) use ($priceMin, $priceMax) {
                $price = $product['price'];
                if ($priceMin && $price < $priceMin) return false;
                if ($priceMax && $price > $priceMax) return false;
                return true;
            });
        }
        
        // Apply sorting
        usort($products, function($a, $b) use ($sortBy, $sortOrder) {
            $valueA = $a[$sortBy] ?? '';
            $valueB = $b[$sortBy] ?? '';
            
            if ($sortOrder === 'desc') {
                return $valueB <=> $valueA;
            }
            return $valueA <=> $valueB;
        });
        
        // Pagination
        $total = count($products);
        $offset = ($page - 1) * $perPage;
        $paginatedProducts = array_slice($products, $offset, $perPage);
        
        return response()->json([
            'products' => $paginatedProducts,
            'pagination' => [
                'current_page' => (int) $page,
                'per_page' => (int) $perPage,
                'total' => $total,
                'last_page' => ceil($total / $perPage),
                'from' => $offset + 1,
                'to' => min($offset + $perPage, $total)
            ]
        ]);
    }
    
    /**
     * Get single product details
     */
    public function show($id): JsonResponse
    {
        // Mock data - replace with actual database query
        $product = [
            'id' => (int) $id,
            'name' => 'Professional Dental Chair Deluxe',
            'brand' => 'MedTech Pro',
            'category' => 'dental',
            'price' => 45000,
            'originalPrice' => 50000,
            'discount' => 10,
            'image' => asset('images/dental.jpg'),
            'images' => [
                asset('images/products/dental-chair-1.jpg'),
                asset('images/products/dental-chair-2.jpg'),
                asset('images/products/dental-chair-3.jpg')
            ],
            'description' => 'Advanced dental chair with ergonomic design, LED lighting, and integrated suction system.',
            'specifications' => [
                'Weight' => '150 kg',
                'Dimensions' => '120 x 80 x 100 cm',
                'Power' => '220V AC',
                'Material' => 'Stainless Steel'
            ],
            'rating' => 4.5,
            'reviews_count' => 128,
            'stock' => 'In Stock',
            'sku' => 'DC-001',
            'warranty' => '2 Years',
            'isNew' => true,
            'isFeatured' => true,
            'related_products' => [2, 3, 4]
        ];
        
        return response()->json($product);
    }
    
    /**
     * Get featured products
     */
    public function featured(): JsonResponse
    {
        // Mock data - replace with actual database query
        $featuredProducts = [
            [
                'id' => 1,
                'name' => 'Professional Dental Chair Deluxe',
                'brand' => 'MedTech Pro',
                'price' => 45000,
                'originalPrice' => 50000,
                'discount' => 10,
                'image' => asset('images/dental.jpg'),
                'rating' => 4.5
            ],
            [
                'id' => 2,
                'name' => 'High-Speed Surgical Airotor',
                'brand' => 'DentCare',
                'price' => 12500,
                'image' => asset('images/brands/1.jpg'),
                'rating' => 4.3
            ],
            [
                'id' => 5,
                'name' => 'Endodontic Motor System',
                'brand' => 'LabTech',
                'price' => 35000,
                'image' => asset('images/brands/1.jpg'),
                'rating' => 4.6
            ],
            [
                'id' => 4,
                'name' => 'HD Intra Oral Camera',
                'brand' => 'PharmaCore',
                'price' => 25000,
                'image' => asset('images/brands/123.jpg'),
                'rating' => 4.4
            ]
        ];
        
        return response()->json(['products' => $featuredProducts]);
    }
}
