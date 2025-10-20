@extends('layouts.app')

@section('title', 'Marketplace - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 gradient-text">Marketplace</h1>
            <p class="text-xl text-gray-300">Discover our complete range of medical products</p>
        </div>
        
        <!-- Filters -->
        <div class="flex flex-wrap gap-4 mb-12 justify-center">
            <button class="filter-btn active px-6 py-2 rounded-full bg-blue-100 text-blue-800 hover:bg-blue-200 transition-colors" data-filter="all">All Products</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="hospital">Hospital</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="clinic">Clinic</button>
            <button class="filter-btn px-6 py-2 rounded-full bg-gray-100 text-gray-700 hover:bg-gray-200 transition-colors" data-filter="dental">Dental</button>
        </div>
        
        <!-- Products Grid -->
        <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-6" id="products-grid">
            <x-product-card name="Digital Stethoscope" price="15000" category="Hospital" />
            <x-product-card name="ECG Machine" price="45000" category="Hospital" />
            <x-product-card name="Defibrillator" price="75000" category="Hospital" />
            <x-product-card name="MRI Scanner" price="2500000" category="Hospital" />
            <x-product-card name="Ventilator" price="125000" category="Hospital" />
            <x-product-card name="Blood Pressure Monitor" price="8500" category="Clinic" />
            <x-product-card name="Ultrasound Scanner" price="85000" category="Clinic" />
            <x-product-card name="Pulse Oximeter" price="3500" category="Clinic" />
            <x-product-card name="Thermometer" price="1200" category="Clinic" />
            <x-product-card name="Nebulizer" price="3200" category="Clinic" />
            <x-product-card name="Dental X-Ray Unit" price="125000" category="Dental" />
            <x-product-card name="Dental Chair" price="150000" category="Dental" />
            <x-product-card name="Dental Drill" price="35000" category="Dental" />
            <x-product-card name="Dental Compressor" price="45000" category="Dental" />
            <x-product-card name="Dental Autoclave" price="25000" category="Dental" />
        </div>
    </div>
</section>
@endsection
