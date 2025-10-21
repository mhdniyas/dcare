@extends('layouts.app')

@section('title', 'Medical Products - D Care Medical Solutions')
@section('description', 'Browse our extensive collection of medical equipment, dental supplies, surgical instruments, and pharmaceutical products.')

@section('content')
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Medical Products</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our comprehensive range of medical equipment and supplies</p>
        </div>
        
        <!-- Category Tabs -->
        <div x-data="{ activeTab: 'dental' }" class="mb-12">
            <div class="flex flex-wrap justify-center gap-4 mb-8">
                <button @click="activeTab = 'dental'" :class="activeTab === 'dental' ? 'bg-gradient-to-r from-teal-500 to-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                    Dental Equipment
                </button>
                <button @click="activeTab = 'surgical'" :class="activeTab === 'surgical' ? 'bg-gradient-to-r from-teal-500 to-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                    Surgical Instruments
                </button>
                <button @click="activeTab = 'diagnostic'" :class="activeTab === 'diagnostic' ? 'bg-gradient-to-r from-teal-500 to-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                    Diagnostic Equipment
                </button>
                <button @click="activeTab = 'pharmacy'" :class="activeTab === 'pharmacy' ? 'bg-gradient-to-r from-teal-500 to-blue-600 text-white' : 'bg-gray-100 text-gray-700 hover:bg-gray-200'" class="px-6 py-3 rounded-xl font-semibold transition-all duration-300">
                    Pharmacy Supplies
                </button>
            </div>
            
            <!-- Dental Equipment Products -->
            <div x-show="activeTab === 'dental'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                @for($i = 1; $i <= 8; $i++)
                <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                    <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('images/dental.jpg') }}" alt="Dental Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                        <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                        @if($i <= 3)
                        <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                            <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">{{ rand(15, 30) }}% OFF</span>
                        </div>
                        @endif
                        @if($i == 1)
                        <div class="absolute bottom-3 left-3 flex gap-2">
                            <span class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">Bestseller</span>
                        </div>
                        @endif
                    </div>
                    <div class="relative p-5 space-y-3">
                        <div>
                            <h3 class="font-bold text-gray-900 text-base mb-1 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">
                                @switch($i)
                                    @case(1) Dental Chair Deluxe @break
                                    @case(2) High Speed Handpiece @break
                                    @case(3) Digital X-Ray Unit @break
                                    @case(4) Intraoral Camera @break
                                    @case(5) Dental Autoclave @break
                                    @case(6) Air Compressor @break
                                    @case(7) LED Dental Light @break
                                    @case(8) Ultrasonic Scaler @break
                                @endswitch
                            </h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Professional dental equipment for modern practices</p>
                        </div>
                        <div class="space-y-1.5 pt-2 border-t border-gray-100">
                            <div class="flex items-baseline gap-2">
                                <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹{{ number_format(rand(15000, 85000)) }}</span>
                                @if($i <= 3)
                                <span class="text-sm text-gray-500 line-through">₹{{ number_format(rand(90000, 120000)) }}</span>
                                @endif
                            </div>
                        </div>
                        <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl hover:shadow-teal-500/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Add to Cart
                        </button>
                    </div>
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                </div>
                @endfor
            </div>
            
            <!-- Surgical Instruments Products -->
            <div x-show="activeTab === 'surgical'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" style="display: none;">
                @for($i = 1; $i <= 8; $i++)
                <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('images/brands/1.jpg') }}" alt="Surgical Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="relative p-5 space-y-3">
                        <div>
                            <h3 class="font-bold text-gray-900 text-base mb-1">
                                @switch($i)
                                    @case(1) Surgical Scissors @break
                                    @case(2) Forceps Set @break
                                    @case(3) Scalpel Kit @break
                                    @case(4) Surgical Clamps @break
                                    @case(5) Needle Holders @break
                                    @case(6) Retractors @break
                                    @case(7) Surgical Sutures @break
                                    @case(8) Surgical Gloves @break
                                @endswitch
                            </h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Premium surgical instruments</p>
                        </div>
                        <div class="space-y-1.5 pt-2 border-t border-gray-100">
                            <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹{{ number_format(rand(2500, 15000)) }}</span>
                        </div>
                        <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                    </div>
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                </div>
                @endfor
            </div>
            
            <!-- Diagnostic Equipment Products -->
            <div x-show="activeTab === 'diagnostic'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" style="display: none;">
                @for($i = 1; $i <= 8; $i++)
                <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('images/brands/12.jpg') }}" alt="Diagnostic Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="relative p-5 space-y-3">
                        <div>
                            <h3 class="font-bold text-gray-900 text-base mb-1">
                                @switch($i)
                                    @case(1) X-Ray Machine @break
                                    @case(2) Ultrasound Scanner @break
                                    @case(3) ECG Machine @break
                                    @case(4) Blood Analyzer @break
                                    @case(5) CT Scanner @break
                                    @case(6) MRI Machine @break
                                    @case(7) Endoscope @break
                                    @case(8) Defibrillator @break
                                @endswitch
                            </h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Advanced diagnostic equipment</p>
                        </div>
                        <div class="space-y-1.5 pt-2 border-t border-gray-100">
                            <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹{{ number_format(rand(50000, 500000)) }}</span>
                        </div>
                        <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                    </div>
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                </div>
                @endfor
            </div>
            
            <!-- Pharmacy Supplies Products -->
            <div x-show="activeTab === 'pharmacy'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6" style="display: none;">
                @for($i = 1; $i <= 8; $i++)
                <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('images/brands/123.jpg') }}" alt="Pharmacy Product {{ $i }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                    </div>
                    <div class="relative p-5 space-y-3">
                        <div>
                            <h3 class="font-bold text-gray-900 text-base mb-1">
                                @switch($i)
                                    @case(1) Medicine Cabinet @break
                                    @case(2) Pill Counter @break
                                    @case(3) Prescription Bottles @break
                                    @case(4) Medical Scales @break
                                    @case(5) Thermometers @break
                                    @case(6) Blood Pressure Monitor @break
                                    @case(7) Stethoscope @break
                                    @case(8) First Aid Kit @break
                                @endswitch
                            </h3>
                            <p class="text-gray-600 text-xs leading-relaxed">Essential pharmacy supplies</p>
                        </div>
                        <div class="space-y-1.5 pt-2 border-t border-gray-100">
                            <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹{{ number_format(rand(500, 25000)) }}</span>
                        </div>
                        <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                    </div>
                    <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                </div>
                @endfor
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-gray-600">Showing products from our extensive catalog</p>
        </div>
    </div>
</div>
@endsection