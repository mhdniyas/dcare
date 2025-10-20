@extends('layouts.app')

@section('title', 'Dental Products - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 text-gray-800">Dental Products</h1>
            <p class="text-xl text-gray-600">Specialized dental equipment and supplies for dental practices</p>
        </div>
        
        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-8 justify-center">
            <button class="filter-btn active px-4 py-2 rounded-lg bg-blue-100 text-blue-800 hover:bg-blue-200 transition-colors" data-filter="all">All</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="equipment">Equipment</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="tools">Tools</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="sterilization">Sterilization</button>
        </div>
        
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-product-card name="Dental Chair" price="150000" category="Equipment" />
            <x-product-card name="Dental X-Ray Unit" price="125000" category="Radiology" />
            <x-product-card name="Dental Drill" price="35000" category="Tools" />
            <x-product-card name="Dental Compressor" price="45000" category="Equipment" />
            <x-product-card name="Dental Autoclave" price="25000" category="Sterilization" />
            <x-product-card name="Dental Handpiece" price="15000" category="Tools" />
            <x-product-card name="Dental Light" price="18000" category="Equipment" />
            <x-product-card name="Dental Suction Unit" price="22000" category="Equipment" />
            <x-product-card name="Dental Scaler" price="8500" category="Tools" />
            <x-product-card name="Dental Curing Light" price="12000" category="Tools" />
            <x-product-card name="Dental Impression Kit" price="3500" category="Materials" />
            <x-product-card name="Dental Instruments Set" price="5500" category="Tools" />
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