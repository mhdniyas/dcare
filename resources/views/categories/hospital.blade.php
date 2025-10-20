@extends('layouts.app')

@section('title', 'Hospital Products - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 text-gray-800">Hospital Products</h1>
            <p class="text-xl text-gray-600">Advanced medical equipment for hospitals and large healthcare facilities</p>
        </div>
        
        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-8 justify-center">
            <button class="filter-btn active px-4 py-2 rounded-lg bg-blue-100 text-blue-800 hover:bg-blue-200 transition-colors" data-filter="all">All</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="cardiology">Cardiology</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="radiology">Radiology</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="surgery">Surgery</button>
            <button class="filter-btn px-4 py-2 rounded-lg bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="icu">ICU</button>
        </div>
        
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6">
            <x-product-card name="Digital Stethoscope" price="15000" category="Cardiology" />
            <x-product-card name="ECG Machine" price="45000" category="Cardiology" />
            <x-product-card name="Defibrillator" price="75000" category="Emergency" />
            <x-product-card name="MRI Scanner" price="2500000" category="Radiology" />
            <x-product-card name="CT Scanner" price="1800000" category="Radiology" />
            <x-product-card name="Ventilator" price="125000" category="ICU" />
            <x-product-card name="Patient Monitor" price="85000" category="ICU" />
            <x-product-card name="Surgical Table" price="95000" category="Surgery" />
            <x-product-card name="Anesthesia Machine" price="150000" category="Surgery" />
            <x-product-card name="X-Ray Machine" price="350000" category="Radiology" />
            <x-product-card name="Ultrasound Scanner" price="85000" category="Radiology" />
            <x-product-card name="Surgical Instruments Set" price="25000" category="Surgery" />
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
                <button class="px-3 py-2 text-gray-700 hover:bg-gray-100 rounded-lg transition-colors">3</button>
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