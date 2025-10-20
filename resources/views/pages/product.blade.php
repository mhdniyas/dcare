@extends('layouts.app')

@section('title', 'Product Details - D Care Pharmaceuticals')

@section('content')
<!-- Breadcrumb -->
<div class="container mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <div class="flex items-center space-x-2 text-sm text-gray-400">
        <a href="/" class="hover:text-cyan-400 transition-colors">Home</a>
        <span>/</span>
        <a href="/products" class="hover:text-cyan-400 transition-colors">Products</a>
        <span>/</span>
        <span>Digital Stethoscope</span>
    </div>
</div>

<section class="py-8 sm:py-12 lg:py-16">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 lg:gap-12 xl:gap-16">
            <!-- Product Gallery -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="aspect-square rounded-xl lg:rounded-2xl overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-cyan-400/50 transition-all duration-300">
                    <img src="{{ asset('images/default.jpg') }}" alt="Digital Stethoscope" class="w-full h-full object-cover">
                </div>
                
                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-2 sm:gap-3">
                    <button class="aspect-square rounded-lg overflow-hidden bg-white/5 backdrop-blur-sm border-2 border-cyan-400/50 hover:border-cyan-400 transition-all">
                        <div class="w-full h-full bg-gradient-to-br from-cyan-500/20 to-blue-500/20"></div>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-cyan-400/50 transition-all">
                        <div class="w-full h-full bg-gradient-to-br from-blue-500/20 to-purple-500/20"></div>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-cyan-400/50 transition-all">
                        <div class="w-full h-full bg-gradient-to-br from-purple-500/20 to-pink-500/20"></div>
                    </button>
                    <button class="aspect-square rounded-lg overflow-hidden bg-white/5 backdrop-blur-sm border border-white/10 hover:border-cyan-400/50 transition-all">
                        <div class="w-full h-full bg-gradient-to-br from-pink-500/20 to-cyan-500/20"></div>
                    </button>
                </div>

                <!-- Trust Badges - Hidden on mobile, visible on desktop -->
                <div class="hidden lg:grid grid-cols-3 gap-4 pt-4">
                    <div class="text-center p-3 rounded-lg bg-white/5 backdrop-blur-sm border border-white/10">
                        <div class="text-2xl mb-1">✓</div>
                        <div class="text-xs text-gray-400">Quality Assured</div>
                    </div>
                    <div class="text-center p-3 rounded-lg bg-white/5 backdrop-blur-sm border border-white/10">
                        <div class="text-2xl mb-1">🚚</div>
                        <div class="text-xs text-gray-400">Free Shipping</div>
                    </div>
                    <div class="text-center p-3 rounded-lg bg-white/5 backdrop-blur-sm border border-white/10">
                        <div class="text-2xl mb-1">↻</div>
                        <div class="text-xs text-gray-400">Easy Returns</div>
                    </div>
                </div>
            </div>
            
            <!-- Product Info -->
            <div class="space-y-6 lg:space-y-8">
                <!-- Category & Title -->
                <div>
                    <span class="inline-block px-3 py-1 bg-blue-500/20 text-blue-300 rounded-full text-xs sm:text-sm font-medium border border-blue-500/30">
                        Hospital Equipment
                    </span>
                    <h1 class="text-2xl sm:text-3xl lg:text-4xl font-bold mt-3 sm:mt-4 mb-2 text-black">Digital Stethoscope</h1>
                    
                    <!-- Rating -->
                    <div class="flex items-center space-x-3 mb-4">
                        <div class="flex text-yellow-400 text-sm sm:text-base">
                            <span>★★★★★</span>
                        </div>
                        <span class="text-sm text-gray-400">(24 reviews)</span>
                        <span class="text-sm text-green-400">In Stock</span>
                    </div>
                    
                    <!-- Price -->
                    <div class="flex items-baseline space-x-3">
                        <p class="text-3xl sm:text-4xl font-bold bg-gradient-to-r from-cyan-400 to-blue-500 bg-clip-text text-transparent">₹15,000</p>
                        <span class="text-lg text-gray-500 line-through">₹18,000</span>
                        <span class="px-2 py-1 bg-green-500/20 text-green-400 text-xs rounded-md border border-green-500/30">17% OFF</span>
                    </div>
                </div>

                <!-- Key Features -->
                <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/10">
                    <h3 class="text-lg sm:text-xl font-semibold mb-4 text-cyan-400 flex items-center">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Key Features
                    </h3>
                    <ul class="space-y-3 text-sm sm:text-base text-gray-300">
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                            <span>High-quality audio amplification with crystal clear sound</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                            <span>Advanced noise reduction technology</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                            <span>Bluetooth 5.0 connectivity for wireless operation</span>
                        </li>
                        <li class="flex items-start">
                            <span class="flex-shrink-0 w-2 h-2 bg-cyan-400 rounded-full mr-3 mt-2"></span>
                            <span>40+ hours battery life with quick charging</span>
                        </li>
                    </ul>
                </div>

                <!-- Quantity Selector -->
                <div class="flex items-center space-x-4">
                    <span class="text-sm sm:text-base text-gray-400">Quantity:</span>
                    <div class="flex items-center border border-white/20 rounded-lg overflow-hidden">
                        <button class="px-3 sm:px-4 py-2 bg-white/5 hover:bg-white/10 transition-colors text-lg">−</button>
                        <input type="number" value="1" min="1" class="w-12 sm:w-16 text-center bg-transparent border-x border-white/20 py-2 focus:outline-none">
                        <button class="px-3 sm:px-4 py-2 bg-white/5 hover:bg-white/10 transition-colors text-lg">+</button>
                    </div>
                </div>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-3 sm:gap-4">
                    <button class="flex-1 bg-gradient-to-r from-blue-500 to-cyan-400 text-black py-3 sm:py-4 rounded-lg font-semibold hover:shadow-lg hover:shadow-blue-500/50 transition-all duration-300 transform hover:scale-[1.02] active:scale-[0.98] flex items-center justify-center space-x-2">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span>Add to Cart</span>
                    </button>
                    <button class="px-4 sm:px-6 py-3 sm:py-4 bg-white/5 backdrop-blur-sm border border-white/20 rounded-lg hover:bg-white/10 hover:border-cyan-400/50 transition-all duration-300 flex items-center justify-center">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Product Tabs -->
        <div class="mt-8 sm:mt-12 lg:mt-16" x-data="{ activeTab: 'description' }">
            <!-- Tab Navigation -->
            <div class="flex space-x-1 bg-white/5 backdrop-blur-sm rounded-lg p-1 border border-white/10 overflow-x-auto">
                <button @click="activeTab = 'description'" :class="activeTab === 'description' ? 'text-cyan-400 bg-cyan-400/20 border border-cyan-400/30' : 'text-gray-400 hover:text-white hover:bg-white/10'" class="flex-1 min-w-0 px-3 py-2 text-sm font-medium rounded-md transition-all">
                    Description
                </button>
                <button @click="activeTab = 'specifications'" :class="activeTab === 'specifications' ? 'text-cyan-400 bg-cyan-400/20 border border-cyan-400/30' : 'text-gray-400 hover:text-white hover:bg-white/10'" class="flex-1 min-w-0 px-3 py-2 text-sm font-medium rounded-md transition-all">
                    Specs
                </button>
                <button @click="activeTab = 'reviews'" :class="activeTab === 'reviews' ? 'text-cyan-400 bg-cyan-400/20 border border-cyan-400/30' : 'text-gray-400 hover:text-white hover:bg-white/10'" class="flex-1 min-w-0 px-3 py-2 text-sm font-medium rounded-md transition-all">
                    Reviews
                </button>
                <button @click="activeTab = 'shipping'" :class="activeTab === 'shipping' ? 'text-cyan-400 bg-cyan-400/20 border border-cyan-400/30' : 'text-gray-400 hover:text-white hover:bg-white/10'" class="flex-1 min-w-0 px-3 py-2 text-sm font-medium rounded-md transition-all">
                    Shipping
                </button>
            </div>
            
            <!-- Tab Content -->
            <div class="mt-4">
                <!-- Description Tab -->
                <div x-show="activeTab === 'description'">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/10">
                        <h3 class="text-lg sm:text-xl font-bold mb-3 text-white">Product Description</h3>
                        <div class="text-sm text-gray-300 leading-relaxed space-y-3">
                            <p>Advanced digital stethoscope with crystal clear sound quality and modern connectivity features.</p>
                            <p>Perfect for healthcare professionals seeking precision and reliability in their diagnostic work.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Specifications Tab -->
                <div x-show="activeTab === 'specifications'">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/10">
                        <h3 class="text-lg sm:text-xl font-bold mb-3 text-white">Specifications</h3>
                        <div class="space-y-2 text-sm text-gray-300">
                            <div class="flex justify-between py-1 border-b border-white/10">
                                <span class="text-gray-400">Frequency Range</span>
                                <span>20Hz - 20kHz</span>
                            </div>
                            <div class="flex justify-between py-1 border-b border-white/10">
                                <span class="text-gray-400">Battery Life</span>
                                <span>40+ hours</span>
                            </div>
                            <div class="flex justify-between py-1 border-b border-white/10">
                                <span class="text-gray-400">Weight</span>
                                <span>180g</span>
                            </div>
                            <div class="flex justify-between py-1">
                                <span class="text-gray-400">Connectivity</span>
                                <span>Bluetooth 5.0</span>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Reviews Tab -->
                <div x-show="activeTab === 'reviews'">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/10">
                        <h3 class="text-lg sm:text-xl font-bold mb-3 text-white">Customer Reviews</h3>
                        <div class="flex items-center space-x-4 mb-4">
                            <div class="text-2xl font-bold text-cyan-400">4.8</div>
                            <div class="flex text-yellow-400">★★★★★</div>
                            <div class="text-sm text-gray-400">(24 reviews)</div>
                        </div>
                        <div class="space-y-3">
                            <div class="border-b border-white/10 pb-3">
                                <div class="flex justify-between items-start mb-1">
                                    <span class="font-medium text-white text-sm">Dr. Sarah Johnson</span>
                                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                </div>
                                <p class="text-xs text-gray-300">Excellent sound quality and easy to use.</p>
                            </div>
                            <div>
                                <div class="flex justify-between items-start mb-1">
                                    <span class="font-medium text-white text-sm">Dr. Michael Chen</span>
                                    <div class="flex text-yellow-400 text-xs">★★★★★</div>
                                </div>
                                <p class="text-xs text-gray-300">Best digital stethoscope I've used.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping Tab -->
                <div x-show="activeTab === 'shipping'">
                    <div class="bg-white/5 backdrop-blur-sm rounded-xl p-4 sm:p-6 border border-white/10">
                        <h3 class="text-lg sm:text-xl font-bold mb-3 text-white">Shipping Info</h3>
                        <div class="space-y-3 text-sm text-gray-300">
                            <div>
                                <h4 class="font-medium text-cyan-400 mb-1">Delivery Time</h4>
                                <p class="text-xs">3-5 business days standard delivery</p>
                            </div>
                            <div>
                                <h4 class="font-medium text-cyan-400 mb-1">Shipping Cost</h4>
                                <p class="text-xs">Free shipping on orders above ₹10,000</p>
                            </div>
                            <div>
                                <h4 class="font-medium text-cyan-400 mb-1">Returns</h4>
                                <p class="text-xs">7-day return policy with full refund</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

 
