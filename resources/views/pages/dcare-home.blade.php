<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>D Care - Your Trusted Medical Equipment & Pharmaceutical Supplier</title>
    <meta name="description" content="D Care offers over 20,000+ medical products including dental equipment, surgical instruments, pharmaceuticals, and diagnostic equipment. Trusted by 500K+ medical professionals across India.">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-900 antialiased">
    <!-- Skip Links for Accessibility -->
    <a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 bg-primary-600 text-white px-4 py-2 rounded-lg z-50">Skip to main content</a>
    
    <!-- Header -->
    @include('components.dcare-header')
    
    <!-- Main Content -->
    <main id="main-content" role="main">
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
                
                <!-- Product Grid Placeholder -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Featured Product 1 -->
                    <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group">
                        <div class="aspect-square overflow-hidden">
                            <img src="{{ asset('images/dental.jpg') }}" alt="Dental Chair Deluxe" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900 mb-2">Dental Chair Deluxe</h3>
                            <p class="text-gray-600 text-sm mb-4">Professional dental chair with advanced features</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-primary-600">₹45,000</span>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Featured Product 2 -->
                    <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group">
                        <div class="aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/1.jpg') }}" alt="Surgical Airotor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900 mb-2">Surgical Airotor</h3>
                            <p class="text-gray-600 text-sm mb-4">High-speed surgical handpiece</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-primary-600">₹12,500</span>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Featured Product 3 -->
                    <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group">
                        <div class="aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/12.jpg') }}" alt="Autoclave Class B" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900 mb-2">Autoclave Class B</h3>
                            <p class="text-gray-600 text-sm mb-4">Professional sterilization equipment</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-primary-600">₹85,000</span>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Featured Product 4 -->
                    <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group">
                        <div class="aspect-square overflow-hidden">
                            <img src="{{ asset('images/brands/123.jpg') }}" alt="Intra Oral Camera" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        </div>
                        <div class="p-6">
                            <h3 class="font-semibold text-gray-900 mb-2">Intra Oral Camera</h3>
                            <p class="text-gray-600 text-sm mb-4">HD digital dental camera</p>
                            <div class="flex items-center justify-between">
                                <span class="text-xl font-bold text-primary-600">₹25,000</span>
                                <button class="bg-primary-600 text-white px-4 py-2 rounded-lg hover:bg-primary-700 transition-colors">
                                    Add to Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="text-center mt-12">
                    <a href="/products" class="bg-primary-600 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-700 transition-colors inline-flex items-center">
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
                    <a href="/products" class="bg-white text-primary-600 px-8 py-4 rounded-lg font-semibold hover:bg-gray-50 transition-colors inline-flex items-center justify-center">
                        Browse Products
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="/contact" class="bg-primary-700 text-white px-8 py-4 rounded-lg font-semibold hover:bg-primary-800 transition-colors inline-flex items-center justify-center">
                        Get Quote
                    </a>
                </div>
            </div>
        </section>
    </main>
    
    <!-- Footer -->
    @include('components.dcare-footer')
    
    <!-- Cart Sidebar -->
    @include('components.dcare-cart-sidebar')
</body>
</html>