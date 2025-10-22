<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Hospital Equipment - D Care Pharmaceuticals</title>
    <meta name="description" content="Professional hospital equipment and medical devices for healthcare facilities.">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-900 antialiased">
    @include('components.dcare-header')
    
    <main class="py-16">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Hospital Equipment</h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">Professional medical equipment for hospitals and healthcare facilities</p>
                <nav class="mt-6">
                    <ol class="flex items-center space-x-2 text-sm text-gray-500">
                        <li><a href="/" class="hover:text-primary-600">Home</a></li>
                        <li>/</li>
                        <li class="text-gray-900">Hospital Equipment</li>
                    </ol>
                </nav>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                <a href="/categories/hospital/diagnostic" class="bg-white rounded-xl shadow-soft p-6 text-center hover:shadow-medium transition-all">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Diagnostic Equipment</h3>
                    <p class="text-gray-600 text-sm">X-Ray, Ultrasound, ECG machines</p>
                </a>
                
                <a href="/categories/hospital/surgical" class="bg-white rounded-xl shadow-soft p-6 text-center hover:shadow-medium transition-all">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Surgical Instruments</h3>
                    <p class="text-gray-600 text-sm">Operating tables, surgical sets</p>
                </a>
                
                <a href="/categories/hospital/laboratory" class="bg-white rounded-xl shadow-soft p-6 text-center hover:shadow-medium transition-all">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Laboratory Equipment</h3>
                    <p class="text-gray-600 text-sm">Microscopes, analyzers, centrifuges</p>
                </a>
                
                <a href="/categories/hospital/pharmaceuticals" class="bg-white rounded-xl shadow-soft p-6 text-center hover:shadow-medium transition-all">
                    <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Pharmaceuticals</h3>
                    <p class="text-gray-600 text-sm">Medicines and medical supplies</p>
                </a>
            </div>
            
            <!-- Featured Products Section -->
            <div class="mt-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Featured Hospital Equipment</h2>
                    <p class="text-lg text-gray-600 max-w-2xl mx-auto">Discover our premium selection of hospital equipment and medical devices</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    @foreach($products as $product)
                    <!-- Futuristic Premium Product Card -->
                    <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                        
                        <!-- Gradient Glow Effect on Hover -->
                        <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                        
                        <!-- Product Image Section -->
                        <div class="relative aspect-square overflow-hidden">
                            <img src="{{ asset($product['image']) }}" 
                                 alt="{{ $product['name'] }}" 
                                 class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700 ease-out">
                            
                            <!-- Glass Reflection Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-br from-white/20 via-transparent to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
                            
                            <!-- Top Badges Row -->
                            <div class="absolute top-3 left-3 flex flex-col gap-2 z-10">
                                <span class="bg-gradient-to-r from-red-500 to-red-600 text-white px-3 py-1.5 rounded-full text-xs font-bold shadow-lg backdrop-blur-sm flex items-center gap-1">
                                    <svg class="w-3 h-3" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                    {{ $product['discount'] }}% OFF
                                </span>
                                @if($loop->first)
                                <span class="bg-gradient-to-r from-green-500 to-emerald-600 text-white px-3 py-1.5 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm animate-pulse">
                                    FEATURED
                                </span>
                                @endif
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
                                @foreach($product['badges'] as $badge)
                                <span class="bg-gradient-to-r from-indigo-500 to-purple-600 text-white px-3 py-1 rounded-full text-xs font-semibold shadow-lg backdrop-blur-sm">
                                    {{ $badge }}
                                </span>
                                @endforeach
                            </div>
                        </div>
                        
                        <!-- Card Content -->
                        <div class="relative p-5 space-y-3">
                            
                            <!-- Product Name & Category -->
                            <div>
                                <h3 class="font-bold text-gray-900 text-base mb-1 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">
                                    {{ $product['name'] }}
                                </h3>
                                <p class="text-gray-600 text-xs leading-relaxed">
                                    {{ $product['description'] }}
                                </p>
                            </div>
                            
                            <!-- Rating & Reviews -->
                            <div class="flex items-center gap-2">
                                <div class="flex items-center">
                                    @for($i = 1; $i <= 5; $i++)
                                        @if($i <= floor($product['rating']))
                                        <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @else
                                        <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                        </svg>
                                        @endif
                                    @endfor
                                </div>
                                <span class="text-xs font-semibold text-gray-700">{{ $product['rating'] }}</span>
                                <span class="text-xs text-gray-500">({{ $product['reviews'] }} reviews)</span>
                            </div>
                            
                            <!-- AI Recommendation Badge -->
                            <div class="inline-flex items-center gap-1.5 bg-gradient-to-r from-purple-50 to-blue-50 border border-purple-200/50 px-3 py-1.5 rounded-full">
                                <svg class="w-3.5 h-3.5 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M11 3a1 1 0 10-2 0v1a1 1 0 102 0V3zM15.657 5.757a1 1 0 00-1.414-1.414l-.707.707a1 1 0 001.414 1.414l.707-.707zM18 10a1 1 0 01-1 1h-1a1 1 0 110-2h1a1 1 0 011 1zM5.05 6.464A1 1 0 106.464 5.05l-.707-.707a1 1 0 00-1.414 1.414l.707.707zM5 10a1 1 0 01-1 1H3a1 1 0 110-2h1a1 1 0 011 1zM8 16v-1h4v1a2 2 0 11-4 0zM12 14c.015-.34.208-.646.477-.859a4 4 0 10-4.954 0c.27.213.462.519.476.859h4.002z"/>
                                </svg>
                                <span class="text-xs font-semibold text-purple-700">Popular in hospitals</span>
                            </div>
                            
                            <!-- Pricing Section -->
                            <div class="space-y-1.5 pt-2 border-t border-gray-100">
                                <div class="flex items-baseline gap-2">
                                    <span class="text-2xl font-bold bg-gradient-to-r from-teal-600 to-blue-600 bg-clip-text text-transparent">
                                        ₹{{ number_format($product['price']) }}
                                    </span>
                                    <span class="text-sm text-gray-500 line-through">₹{{ number_format($product['original_price']) }}</span>
                                </div>
                                <div class="flex items-center gap-1.5">
                                    <span class="text-xs font-bold text-green-600">Save ₹{{ number_format($product['original_price'] - $product['price']) }}</span>
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
                    @endforeach
                </div>
            </div>
        </div>
    </main>
    
    @include('components.dcare-footer')
    @include('components.dcare-cart-sidebar')
</body>
</html>