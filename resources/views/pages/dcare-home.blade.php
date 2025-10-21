@extends('layouts.app')

@section('title', 'D Care - Your Trusted Medical Equipment & Pharmaceutical Supplier')
@section('description', 'D Care offers over 20,000+ medical products including dental equipment, surgical instruments, pharmaceuticals, and diagnostic equipment. Trusted by 500K+ medical professionals across India.')

@section('content')
    <!-- Skip Links for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary-600 text-white px-4 py-2 rounded-lg z-50">Skip to main content</a>
    
    <div id="main-content" role="main">
        <!-- Hero Section -->
        @include('components.dcare-hero')
        
        <!-- Category Grid -->
        @include('components.dcare-category-grid')
        
        <!-- Brand Carousel -->
        @include('components.dcare-brand-carousel')
        
        <!-- Featured Products Section -->
        <section class="py-16 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Featured Products</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our most popular medical equipment and supplies, trusted by healthcare professionals across India.</p>
                </div>
                
                <!-- Product Grid -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Featured Product 1 -->
                    <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset('images/dental.jpg') }}" alt="Dental Chair Deluxe" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">25% OFF</span>
                                <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm animate-pulse">SALE</span>
                            </div>
                            <div class="absolute bottom-3 left-3 flex gap-2">
                                <span class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">Bestseller</span>
                            </div>
                        </div>
                        <div class="relative p-5 space-y-3">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">Dental Chair Deluxe</h3>
                                <p class="text-gray-600 text-xs leading-relaxed">Professional dental chair with advanced features</p>
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-gray-100">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹45,000</span>
                                    <span class="text-sm text-gray-500 line-through">₹60,000</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-xs font-bold text-green-600">Save ₹15,000</span>
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
                    
                    <!-- Featured Product 2 -->
                    <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/1.jpg') }}" alt="Surgical Airotor" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">15% OFF</span>
                            </div>
                            <div class="absolute bottom-3 left-3 flex gap-2">
                                <span class="bg-gradient-to-r from-orange-500 to-red-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">Hot</span>
                            </div>
                        </div>
                        <div class="relative p-5 space-y-3">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1">Surgical Airotor</h3>
                                <p class="text-gray-600 text-xs leading-relaxed">High-speed surgical handpiece</p>
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-gray-100">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹12,500</span>
                                    <span class="text-sm text-gray-500 line-through">₹14,700</span>
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                        </div>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                    </div>
                    
                    <!-- Featured Product 3 -->
                    <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/12.jpg') }}" alt="Autoclave Class B" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">30% OFF</span>
                            </div>
                            <div class="absolute bottom-3 left-3 flex gap-2">
                                <span class="bg-gradient-to-r from-purple-500 to-indigo-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">Best</span>
                            </div>
                        </div>
                        <div class="relative p-5 space-y-3">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1">Autoclave Class B</h3>
                                <p class="text-gray-600 text-xs leading-relaxed">Professional sterilization equipment</p>
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-gray-100">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹85,000</span>
                                    <span class="text-sm text-gray-500 line-through">₹1,21,428</span>
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                        </div>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                    </div>
                    
                    <!-- Featured Product 4 -->
                    <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/123.jpg') }}" alt="Intra Oral Camera" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm">20% OFF</span>
                            </div>
                            <div class="absolute bottom-3 left-3 flex gap-2">
                                <span class="bg-gradient-to-r from-blue-500 to-cyan-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">New</span>
                            </div>
                        </div>
                        <div class="relative p-5 space-y-3">
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1">Intra Oral Camera</h3>
                                <p class="text-gray-600 text-xs leading-relaxed">HD digital dental camera</p>
                            </div>
                            <div class="space-y-1.5 pt-2 border-t border-gray-100">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">₹25,000</span>
                                    <span class="text-sm text-gray-500 line-through">₹31,250</span>
                                </div>
                            </div>
                            <button class="w-full bg-gradient-to-r from-teal-500 to-blue-600 text-white py-2.5 rounded-xl font-semibold text-sm shadow-lg hover:shadow-xl transition-all duration-300">Add to Cart</button>
                        </div>
                        <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="{{ route('products.index') }}" class="bg-primary-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-700 transition-colors inline-flex items-center">
                        View All Products
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
        
        <!-- Testimonials Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">What Our Customers Say</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Trusted by medical professionals across India</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                    <div class="bg-gray-50 rounded-xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"D Care has been our trusted supplier for over 5 years. Their product quality and customer service are exceptional."</p>
                        <div class="font-semibold text-gray-900">Dr. Rajesh Kumar</div>
                        <div class="text-sm text-gray-500">Dental Surgeon, Mumbai</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"Fast delivery and genuine products. D Care has helped us equip our new clinic with the best medical equipment."</p>
                        <div class="font-semibold text-gray-900">Dr. Priya Sharma</div>
                        <div class="text-sm text-gray-500">General Practitioner, Delhi</div>
                    </div>
                    
                    <div class="bg-gray-50 rounded-xl p-8 text-center">
                        <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-8 h-8 text-primary-600" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <p class="text-gray-600 mb-6 italic">"Excellent support team and competitive pricing. Highly recommended for all medical equipment needs."</p>
                        <div class="font-semibold text-gray-900">Dr. Amit Patel</div>
                        <div class="text-sm text-gray-500">Orthopedic Surgeon, Bangalore</div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- CTA Section -->
        <section class="py-16 bg-primary-600">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Ready to Get Started?</h2>
                <p class="text-xl text-primary-100 mb-8 max-w-2xl mx-auto">Join thousands of medical professionals who trust D Care for their equipment needs.</p>
                
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('products.index') }}" class="bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors inline-flex items-center justify-center">
                        Browse Products
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="{{ route('pages.contact') }}" class="bg-primary-700 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-800 transition-colors inline-flex items-center justify-center">
                        Get Quote
                    </a>
                </div>
            </div>
        </section>
    </div>
@endsection