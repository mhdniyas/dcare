<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CategoryController extends Controller
{
    /**
     * Display a listing of categories.
     */
    public function index(): View
    {
        return view('pages.categories');
    }

    /**
     * Display hospital category.
     */
    public function hospital(): View
    {
        // Mock product data for hospital equipment
        $products = [
            [
                'id' => 1,
                'name' => 'Digital X-Ray Machine',
                'description' => 'Advanced digital radiography system with high-resolution imaging',
                'price' => 450000,
                'original_price' => 600000,
                'discount' => 25,
                'rating' => 4.8,
                'reviews' => 156,
                'image' => 'images/hospital.jpg',
                'badges' => ['Featured', 'New Arrival'],
                'in_stock' => true
            ],
            [
                'id' => 2,
                'name' => 'Patient Monitor System',
                'description' => 'Multi-parameter patient monitoring with real-time data display',
                'price' => 85000,
                'original_price' => 120000,
                'discount' => 29,
                'rating' => 4.6,
                'reviews' => 89,
                'image' => 'images/hospital.jpg',
                'badges' => ['Bestseller', 'Verified'],
                'in_stock' => true
            ],
            [
                'id' => 3,
                'name' => 'Ultrasound Scanner',
                'description' => 'Portable ultrasound machine with advanced imaging capabilities',
                'price' => 320000,
                'original_price' => 450000,
                'discount' => 29,
                'rating' => 4.7,
                'reviews' => 203,
                'image' => 'images/hospital.jpg',
                'badges' => ['Premium', 'Limited Stock'],
                'in_stock' => true
            ],
            [
                'id' => 4,
                'name' => 'ECG Machine',
                'description' => '12-lead ECG machine with automated analysis and reporting',
                'price' => 65000,
                'original_price' => 90000,
                'discount' => 28,
                'rating' => 4.5,
                'reviews' => 127,
                'image' => 'images/hospital.jpg',
                'badges' => ['Reliable', 'Certified'],
                'in_stock' => true
            ]
        ];

        return view('categories.hospital', compact('products'));
    }

    /**
     * Display dental category.
     */
    public function dental(): View
    {
        // Mock product data for dental equipment
        $products = [
            [
                'id' => 5,
                'name' => 'Premium Dental Chair',
                'description' => 'Electric dental chair with ergonomic design and advanced features',
                'price' => 180000,
                'original_price' => 250000,
                'discount' => 28,
                'rating' => 4.9,
                'reviews' => 234,
                'image' => 'images/dental.jpg',
                'badges' => ['Bestseller', 'Premium'],
                'in_stock' => true
            ],
            [
                'id' => 6,
                'name' => 'Dental Handpiece System',
                'description' => 'High-speed dental handpiece with precision control and reliability',
                'price' => 45000,
                'original_price' => 65000,
                'discount' => 31,
                'rating' => 4.7,
                'reviews' => 156,
                'image' => 'images/dental.jpg',
                'badges' => ['Professional', 'Durable'],
                'in_stock' => true
            ],
            [
                'id' => 7,
                'name' => 'Digital X-Ray System',
                'description' => 'Intraoral digital X-ray system with instant image capture',
                'price' => 95000,
                'original_price' => 140000,
                'discount' => 32,
                'rating' => 4.8,
                'reviews' => 189,
                'image' => 'images/dental.jpg',
                'badges' => ['Digital', 'Fast'],
                'in_stock' => true
            ],
            [
                'id' => 8,
                'name' => 'Autoclave Sterilizer',
                'description' => 'Class B autoclave for complete sterilization of dental instruments',
                'price' => 75000,
                'original_price' => 110000,
                'discount' => 32,
                'rating' => 4.6,
                'reviews' => 142,
                'image' => 'images/dental.jpg',
                'badges' => ['Sterile', 'Efficient'],
                'in_stock' => true
            ]
        ];

        return view('categories.dental', compact('products'));
    }

    /**
     * Display clinic category.
     */
    public function clinic(): View
    {
        // Mock product data for clinic equipment
        $products = [
            [
                'id' => 9,
                'name' => 'Examination Table',
                'description' => 'Adjustable examination table with hydraulic mechanism',
                'price' => 85000,
                'original_price' => 120000,
                'discount' => 29,
                'rating' => 4.7,
                'reviews' => 167,
                'image' => 'images/clinic.jpg',
                'badges' => ['Sturdy', 'Comfortable'],
                'in_stock' => true
            ],
            [
                'id' => 10,
                'name' => 'Blood Pressure Monitor',
                'description' => 'Digital BP monitor with automatic inflation and memory storage',
                'price' => 25000,
                'original_price' => 35000,
                'discount' => 29,
                'rating' => 4.5,
                'reviews' => 98,
                'image' => 'images/clinic.jpg',
                'badges' => ['Accurate', 'Portable'],
                'in_stock' => true
            ],
            [
                'id' => 11,
                'name' => 'Stethoscope Set',
                'description' => 'Professional stethoscope with dual-head chest piece',
                'price' => 8500,
                'original_price' => 12000,
                'discount' => 29,
                'rating' => 4.6,
                'reviews' => 203,
                'image' => 'images/clinic.jpg',
                'badges' => ['Professional', 'Clear Sound'],
                'in_stock' => true
            ],
            [
                'id' => 12,
                'name' => 'Medical Refrigerator',
                'description' => 'Vaccine storage refrigerator with temperature monitoring',
                'price' => 45000,
                'original_price' => 65000,
                'discount' => 31,
                'rating' => 4.8,
                'reviews' => 134,
                'image' => 'images/clinic.jpg',
                'badges' => ['Reliable', 'Energy Efficient'],
                'in_stock' => true
            ]
        ];

        return view('categories.clinic', compact('products'));
    }

    /**
     * Display the specified category.
     */
    public function show(string $slug): View
    {
        // In a real application, you would fetch the category by slug
        // $category = Category::where('slug', $slug)->firstOrFail();
        
        return view('categories.show', compact('slug'));
    }
}