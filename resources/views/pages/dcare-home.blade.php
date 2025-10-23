@extends('layouts.app')

@section('title', 'D Care - Your Trusted Medical Equipment & Pharmaceutical Supplier')
@section('description', 'D Care offers over 20,000+ medical products including dental equipment, surgical instruments, pharmaceuticals, and diagnostic equipment. Trusted by 500K+ medical professionals across India.')

@section('content')
    <!-- Skip Links for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary-600 text-white px-4 py-2 rounded-lg z-50">Skip to main content</a>
    
    <div id="main-content" role="main">
        @include('components.dcare-hero')
        @include('components.dcare-category-grid')
        @include('components.dcare-recently-viewed')
        @include('components.dcare-brand-carousel')
        @include('components.dcare-featured-categories')
        @include('components.dcare-most-selling')

       
        <!-- Testimonials Section -->
        <section class="py-8 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex items-center justify-between mb-4">
                    <h2 class="text-lg font-semibold text-gray-900">What Our Customers Say</h2>
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
        <section class="py-8 bg-primary-600">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-lg font-semibold text-white mb-2">Ready to Get Started?</h2>
                <p class="text-sm text-primary-100 mb-4">Join thousands of medical professionals who trust D Care for their equipment needs.</p>
                
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