@extends('layouts.app')

@section('title', 'Clinic Products - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 text-gray-800">Clinic Products</h1>
            <p class="text-xl text-gray-600">Essential medical tools and equipment for clinics and small practices</p>
        </div>
        
        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-8 justify-center">
            <button class="filter-btn active px-4 py-2 rounded-lg bg-blue-100 text-blue-800 hover:bg-blue-200 transition-colors" data-filter="all">All</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="diagnostics">Diagnostics</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="furniture">Furniture</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="equipment">Equipment</button>
        </div>
        
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-product-card name="Blood Pressure Monitor" price="8500" category="Diagnostics" />
            <x-product-card name="Pulse Oximeter" price="3500" category="Diagnostics" />
            <x-product-card name="Digital Thermometer" price="1200" category="Diagnostics" />
            <x-product-card name="Examination Table" price="15000" category="Furniture" />
            <x-product-card name="Medical Scale" price="5500" category="Diagnostics" />
            <x-product-card name="Otoscope" price="4500" category="Diagnostics" />
            <x-product-card name="Ophthalmoscope" price="6500" category="Diagnostics" />
            <x-product-card name="Nebulizer" price="3200" category="Respiratory" />
            <x-product-card name="Glucometer" price="2800" category="Diagnostics" />
            <x-product-card name="Medical Cabinet" price="12000" category="Storage" />
            <x-product-card name="Examination Light" price="8500" category="Equipment" />
            <x-product-card name="First Aid Kit" price="1500" category="Emergency" />
        </div>
        
        <!-- Pagination -->
        <div class="flex justify-center mt-12">
            <nav class="flex items-center space-x-2">
                <button class="px-3 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                    </svg>
                </button>
                <button class="px-3 py-2 bg-blue-600 text-white rounded-lg">1</button>
                <button class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">2</button>
                <button class="px-3 py-2 text-gray-500 hover:text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </button>
            </nav>
        </div>
    </div>
</section>
@endsection