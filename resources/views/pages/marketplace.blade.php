@extends('layouts.app')

@section('title', 'Marketplace - D Care')
@section('description', 'Discover medical products from verified suppliers in our marketplace.')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-gray-900">Marketplace</h1>
            <p class="text-gray-600 mt-2">Discover medical products from verified suppliers</p>
        </div>
    </div>

    <!-- Featured Marketplace Products -->
    <div class="container mx-auto px-4 py-8">
        <div class="text-center mb-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-2">Featured Marketplace Deals</h2>
            <p class="text-gray-600">Exclusive offers from verified suppliers</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            @for($i = 1; $i <= 4; $i++)
            <!-- Futuristic Premium Product Card -->
            <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                
                <!-- Gradient Glow Effect on Hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                
                <!-- Product Image Section -->
                <div class="relative aspect-square overflow-hidden">
                    <img src="{{ asset('images/dental.jpg') }}" 
                         alt="Marketplace Product {{ $i }}" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                    
                    <!-- Glass Reflection Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                    
                    <!-- Top Badges Row -->
                    <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                        <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm flex items-center gap-1">
                            <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            {{ rand(25, 50) }}% OFF
                        </span>
                        <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm animate-pulse">
                            SALE
                        </span>
                    </div>
                    
                    <!-- Top Right Actions -->
                    <div class="absolute top-3 right-3 flex flex-col gap-2 z-10">
                        <!-- Wishlist Button -->
                        <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full shadow-lg hover:bg-gradient-to-br hover:from-pink-500 hover:to-red-500 hover:text-white transition-all duration-300 group/heart">
                            <svg class="w-5 h-5 text-gray-600 group-hover/heart:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                            </svg>
                        </button>
                        
                        <!-- Quick View Button -->
                        <button class="bg-white/90 backdrop-blur-sm p-2 rounded-full shadow-lg hover:bg-gradient-to-br hover:from-blue-500 hover:to-cyan-500 hover:text-white transition-all duration-300 group/view">
                            <svg class="w-5 h-5 text-gray-600 group-hover/view:text-white transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- Bottom Tag Chips -->
                    <div class="absolute bottom-3 left-3 flex gap-2">
                        <span class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">
                            Bestseller
                        </span>
                        <span class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">
                            Verified Seller
                        </span>
                    </div>
                </div>
                
                <!-- Card Content -->
                <div class="relative p-5 space-y-3">
                    
                    <!-- Product Name & Category -->
                    <div>
                        <h3 class="font-bold text-gray-900 text-base mb-1 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">
                            @switch($i)
                                @case(1) Premium Dental Unit @break
                                @case(2) Digital X-Ray Machine @break
                                @case(3) Ultrasound Scanner @break
                                @case(4) Patient Monitor @break
                            @endswitch
                        </h3>
                        <p class="text-gray-600 text-xs leading-relaxed">
                            Professional medical equipment with advanced features
                        </p>
                    </div>
                    
                    <!-- Rating & Reviews -->
                    <div class="flex items-center gap-2">
                        <div class="flex items-center">
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                            <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                            </svg>
                        </div>
                        <span class="text-xs font-semibold text-gray-700">4.{{ rand(5, 9) }}</span>
                        <span class="text-xs text-gray-500">({{ rand(100, 500) }} reviews)</span>
                    </div>
                    
                    <!-- AI Recommendation Badge -->
                    <div class="inline-flex items-center gap-1.5 bg-gradient-to-r from-purple-50 to-blue-50 border border-purple-200/50 px-3 py-1.5 rounded-full">
                        <svg class="w-3.5 h-3.5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                        </svg>
                        <span class="text-xs font-semibold text-purple-700">Popular in your area</span>
                    </div>
                    
                    <!-- Pricing Section -->
                    <div class="space-y-1.5 pt-2 border-t border-gray-100">
                        <div class="flex items-baseline gap-2">
                            <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">
                                ₹{{ number_format(rand(75000, 325000)) }}
                            </span>
                            <span class="text-sm text-gray-500 line-through">₹{{ number_format(rand(400000, 600000)) }}</span>
                        </div>
                        <div class="flex items-center gap-1.5">
                            <span class="text-xs font-bold text-green-600">Save ₹{{ number_format(rand(50000, 150000)) }}</span>
                            <span class="text-xs text-gray-500">• 5 offers available</span>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex gap-2 pt-2">
                        <button class="flex-1 bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl hover:shadow-teal-500/50 hover:scale-105 transition-all duration-300 flex items-center justify-center gap-2 group/btn">
                            <svg class="w-4 h-4 group-hover/btn:animate-bounce" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            Add to Cart
                        </button>
                        <button class="bg-gray-100 hover:bg-gray-200 text-gray-700 p-2.5 rounded-xl font-semibold text-sm transition-all duration-300 hover:scale-105">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                        </button>
                    </div>
                    
                    <!-- View Similar Link -->
                    <button class="w-full text-center text-xs text-gray-600 hover:text-teal-600 font-medium py-2 hover:underline transition-colors flex items-center justify-center gap-1 group/similar">
                        <span>View Similar Products</span>
                        <svg class="w-3 h-3 group-hover/similar:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </button>
                </div>
                
                <!-- Neon Glow Border on Hover -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
            </div>
            @endfor
        </div>
        
        <div class="text-center">
            <a href="{{ route('products.index') }}" class="inline-flex items-center px-6 py-3 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors font-medium">
                View All Products
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</div>
@endsection