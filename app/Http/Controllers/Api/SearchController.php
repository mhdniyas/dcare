<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class SearchController extends Controller
{
    /**
     * Get search suggestions
     */
    public function suggestions(Request $request): JsonResponse
    {
        $query = $request->get('q', '');
        
        if (strlen($query) < 2) {
            return response()->json(['suggestions' => []]);
        }
        
        // Mock data - replace with actual database queries
        $suggestions = [
            [
                'id' => 1,
                'name' => 'Dental Chair Deluxe',
                'category' => 'Dental Equipment',
                'image' => asset('images/dental.jpg'),
                'price' => 45000,
                'rating' => 4.5
            ],
            [
                'id' => 2,
                'name' => 'Surgical Airotor',
                'category' => 'Dental Equipment',
                'image' => asset('images/brands/1.jpg'),
                'price' => 12500,
                'rating' => 4.3
            ],
            [
                'id' => 3,
                'name' => 'Autoclave Class B',
                'category' => 'Sterilization',
                'image' => asset('images/brands/12.jpg'),
                'price' => 85000,
                'rating' => 4.7
            ],
            [
                'id' => 4,
                'name' => 'Intra Oral Camera',
                'category' => 'Diagnostic',
                'image' => asset('images/brands/123.jpg'),
                'price' => 25000,
                'rating' => 4.4
            ],
            [
                'id' => 5,
                'name' => 'Endodontic Motor',
                'category' => 'Endodontics',
                'image' => asset('images/brands/1.jpg'),
                'price' => 35000,
                'rating' => 4.6
            ]
        ];
        
        // Filter suggestions based on query
        $filteredSuggestions = array_filter($suggestions, function($item) use ($query) {
            return stripos($item['name'], $query) !== false || 
                   stripos($item['category'], $query) !== false;
        });
        
        return response()->json([
            'suggestions' => array_values($filteredSuggestions)
        ]);
    }
    
    /**
     * Get search results
     */
    public function results(Request $request): JsonResponse
    {
        $query = $request->get('q', '');
        $limit = $request->get('limit', 10);
        
        if (strlen($query) < 2) {
            return response()->json(['results' => []]);
        }
        
        // Mock data - replace with actual database queries
        $results = [
            [
                'id' => 1,
                'name' => 'Professional Dental Chair Deluxe',
                'brand' => 'MedTech Pro',
                'category' => 'Dental Equipment',
                'image' => asset('images/dental.jpg'),
                'price' => 45000,
                'rating' => 4.5,
                'stock' => 'In Stock'
            ],
            [
                'id' => 2,
                'name' => 'High-Speed Surgical Airotor',
                'brand' => 'DentCare',
                'category' => 'Dental Equipment',
                'image' => asset('images/brands/1.jpg'),
                'price' => 12500,
                'rating' => 4.3,
                'stock' => 'In Stock'
            ],
            [
                'id' => 3,
                'name' => 'Class B Autoclave Sterilizer',
                'brand' => 'SurgiMax',
                'category' => 'Sterilization',
                'image' => asset('images/brands/12.jpg'),
                'price' => 85000,
                'rating' => 4.7,
                'stock' => 'In Stock'
            ],
            [
                'id' => 4,
                'name' => 'HD Intra Oral Camera',
                'brand' => 'PharmaCore',
                'category' => 'Diagnostic',
                'image' => asset('images/brands/123.jpg'),
                'price' => 25000,
                'rating' => 4.4,
                'stock' => 'Low Stock'
            ],
            [
                'id' => 5,
                'name' => 'Endodontic Motor System',
                'brand' => 'LabTech',
                'category' => 'Endodontics',
                'image' => asset('images/brands/1.jpg'),
                'price' => 35000,
                'rating' => 4.6,
                'stock' => 'In Stock'
            ],
            [
                'id' => 6,
                'name' => 'Composite Resin Kit',
                'brand' => 'CardioPro',
                'category' => 'Dental Materials',
                'image' => asset('images/brands/12.jpg'),
                'price' => 2500,
                'rating' => 4.2,
                'stock' => 'In Stock'
            ]
        ];
        
        // Filter results based on query
        $filteredResults = array_filter($results, function($item) use ($query) {
            return stripos($item['name'], $query) !== false || 
                   stripos($item['brand'], $query) !== false ||
                   stripos($item['category'], $query) !== false;
        });
        
        // Limit results
        $limitedResults = array_slice(array_values($filteredResults), 0, $limit);
        
        return response()->json([
            'results' => $limitedResults,
            'total' => count($filteredResults),
            'query' => $query
        ]);
    }
    
    /**
     * Get general search endpoint
     */
    public function index(Request $request): JsonResponse
    {
        $query = $request->get('q', '');
        
        if (strlen($query) < 2) {
            return response()->json([
                'suggestions' => [],
                'results' => []
            ]);
        }
        
        // Get both suggestions and results
        $suggestionsResponse = $this->suggestions($request);
        $resultsResponse = $this->results($request);
        
        return response()->json([
            'suggestions' => $suggestionsResponse->getData()->suggestions,
            'results' => $resultsResponse->getData()->results,
            'query' => $query
        ]);
    }
}
