@extends('layouts.app')

@section('title', 'Digital Stethoscope - D Care Pharmaceuticals')

@section('content')
<div x-data="productPage()" class="bg-gray-50 min-h-screen">
    <!-- Breadcrumb -->
    <div class="bg-white border-b mt-16 md:mt-4">
        <div class="container mx-auto px-4 py-3">
            <div class="flex items-center space-x-2 text-sm text-gray-600">
                <a href="/" class="hover:text-blue-600 transition-colors">Home</a>
                <span>/</span>
                <a href="/products" class="hover:text-blue-600 transition-colors">Products</a>
                <span>/</span>
                <span class="text-gray-900">Digital Stethoscope</span>
            </div>
        </div>
    </div>

    <div class="container mx-auto px-4 py-6">
        <div class="grid lg:grid-cols-2 gap-8">
            <!-- Product Images -->
            <div class="space-y-4">
                <!-- Main Image -->
                <div class="relative bg-white rounded-lg border overflow-hidden">
                    <div class="aspect-square">
                        <img :src="selectedImage" alt="Digital Stethoscope" class="w-full h-full object-cover">
                    </div>
                    <!-- Zoom Icon -->
                    <button @click="openImageModal = true" class="absolute top-4 right-4 bg-white/90 hover:bg-white p-2 rounded-full shadow-md transition-all">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"/>
                        </svg>
                    </button>
                    <!-- Sale Badge -->
                    <div class="absolute top-4 left-4 bg-red-500 text-white px-2 py-1 rounded text-sm font-medium">
                        17% OFF
                    </div>
                </div>

                <!-- Thumbnail Images -->
                <div class="grid grid-cols-4 gap-2">
                    <template x-for="(image, index) in images" :key="index">
                        <button @click="selectedImage = image" 
                                :class="selectedImage === image ? 'border-blue-500 border-2' : 'border-gray-200 border'"
                                class="aspect-square bg-white rounded-lg overflow-hidden hover:border-blue-300 transition-colors">
                            <img :src="image" :alt="'Product image ' + (index + 1)" class="w-full h-full object-cover">
                        </button>
                    </template>
                </div>

                <!-- Trust Badges -->
                <div class="hidden lg:grid grid-cols-3 gap-4 mt-6">
                    <div class="text-center p-4 bg-white rounded-lg border">
                        <div class="text-green-500 text-2xl mb-2">✓</div>
                        <div class="text-sm font-medium text-gray-900">Authentic Products</div>
                        <div class="text-xs text-gray-500">100% Genuine</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg border">
                        <div class="text-blue-500 text-2xl mb-2">🚚</div>
                        <div class="text-sm font-medium text-gray-900">Free Shipping</div>
                        <div class="text-xs text-gray-500">On orders ₹10,000+</div>
                    </div>
                    <div class="text-center p-4 bg-white rounded-lg border">
                        <div class="text-orange-500 text-2xl mb-2">↻</div>
                        <div class="text-sm font-medium text-gray-900">Easy Returns</div>
                        <div class="text-xs text-gray-500">7 Days Policy</div>
                    </div>
                </div>
            </div>

            <!-- Product Info -->
            <div class="space-y-6">
                <!-- Brand & Title -->
                <div>
                    <div class="text-sm text-gray-500 mb-1">D Care Pharmaceuticals</div>
                    <h1 class="text-2xl lg:text-3xl font-bold text-gray-900 mb-2">
                        <a href="/" class="hover:text-blue-600 transition-colors">Digital Stethoscope Pro</a>
                    </h1>
                    <div class="text-sm text-gray-600 mb-3">SKU: DCR-STET-001</div>
                    
                    <!-- Rating & Reviews -->
                    <div class="flex items-center space-x-4 mb-4">
                        <div class="flex items-center space-x-1">
                            <div class="flex text-yellow-400">
                                <template x-for="i in 5" :key="i">
                                    <span>★</span>
                                </template>
                            </div>
                            <span class="text-sm font-medium text-gray-900">4.8</span>
                        </div>
                        <button @click="activeTab = 'reviews'" class="text-sm text-blue-600 hover:underline">
                            (24 Reviews)
                        </button>
                        <span class="text-sm text-green-600 font-medium">✓ In Stock</span>
                    </div>
                </div>

                <!-- Price -->
                <div class="bg-gray-50 p-4 rounded-lg border">
                    <div class="flex items-baseline space-x-3 mb-2">
                        <span class="text-3xl font-bold text-gray-900">₹15,000</span>
                        <span class="text-lg text-gray-500 line-through">₹18,000</span>
                        <span class="bg-red-100 text-red-800 px-2 py-1 rounded text-sm font-medium">Save ₹3,000</span>
                    </div>
                    <div class="text-sm text-gray-600">Inclusive of all taxes</div>
                    <div class="text-sm text-green-600 mt-1">Free shipping on this order</div>
                </div>

                <!-- Key Features -->
                <div class="bg-blue-50 p-4 rounded-lg border border-blue-200">
                    <h3 class="font-semibold text-gray-900 mb-3 flex items-center">
                        <svg class="w-5 h-5 text-blue-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        Key Features
                    </h3>
                    <ul class="space-y-2 text-sm text-gray-700">
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 mt-2 flex-shrink-0"></span>
                            High-quality audio amplification with crystal clear sound
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 mt-2 flex-shrink-0"></span>
                            Advanced noise reduction technology
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 mt-2 flex-shrink-0"></span>
                            Bluetooth 5.0 connectivity for wireless operation
                        </li>
                        <li class="flex items-start">
                            <span class="w-2 h-2 bg-blue-500 rounded-full mr-3 mt-2 flex-shrink-0"></span>
                            40+ hours battery life with quick charging
                        </li>
                    </ul>
                </div>

                <!-- Quantity & Actions -->
                <div class="space-y-4">
                    <!-- Quantity Selector -->
                    <div class="flex items-center space-x-4">
                        <label class="text-sm font-medium text-gray-900">Quantity:</label>
                        <div class="flex items-center border border-gray-300 rounded-lg">
                            <button @click="quantity > 1 ? quantity-- : null" 
                                    class="px-3 py-2 hover:bg-gray-100 transition-colors">−</button>
                            <input x-model="quantity" type="number" min="1" 
                                   class="w-16 text-center py-2 border-x border-gray-300 focus:outline-none focus:ring-2 focus:ring-blue-500">
                            <button @click="quantity++" 
                                    class="px-3 py-2 hover:bg-gray-100 transition-colors">+</button>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="space-y-3">
                        <button @click="addToCart()" 
                                class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 px-6 rounded-lg font-semibold transition-colors flex items-center justify-center space-x-2">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span>Add to Cart</span>
                        </button>
                        
                        <div class="grid grid-cols-2 gap-3">
                            <button @click="toggleWishlist()" 
                                    :class="isWishlisted ? 'bg-red-50 text-red-600 border-red-200' : 'bg-gray-50 text-gray-700 border-gray-300'"
                                    class="py-2 px-4 border rounded-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                                <span x-text="isWishlisted ? 'Wishlisted' : 'Wishlist'"></span>
                            </button>
                            
                            <button class="py-2 px-4 bg-gray-50 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-100 transition-colors flex items-center justify-center space-x-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.367 2.684 3 3 0 00-5.367-2.684z"/>
                                </svg>
                                <span>Share</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Delivery Info -->
                <div class="bg-green-50 p-4 rounded-lg border border-green-200">
                    <h4 class="font-semibold text-gray-900 mb-2">Delivery Information</h4>
                    <div class="space-y-2 text-sm text-gray-700">
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                            <span>Free delivery on orders above ₹10,000</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>Delivery in 3-5 business days</span>
                        </div>
                        <div class="flex items-center space-x-2">
                            <svg class="w-4 h-4 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <span>7-day return policy</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Product Details Tabs -->
        <div class="mt-12 bg-white rounded-lg border">
            <!-- Tab Navigation -->
            <div class="border-b">
                <nav class="flex space-x-8 px-6" aria-label="Tabs">
                    <template x-for="tab in tabs" :key="tab.id">
                        <button @click="activeTab = tab.id"
                                :class="activeTab === tab.id ? 'border-blue-500 text-blue-600' : 'border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300'"
                                class="whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm transition-colors"
                                x-text="tab.name">
                        </button>
                    </template>
                </nav>
            </div>

            <!-- Tab Content -->
            <div class="p-6">
                <!-- Description -->
                <div x-show="activeTab === 'description'" class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900">Product Description</h3>
                    <div class="prose prose-sm max-w-none text-gray-700">
                        <p>The Digital Stethoscope Pro represents the pinnacle of modern medical diagnostic equipment. Engineered with precision and designed for healthcare professionals who demand excellence, this advanced stethoscope combines traditional functionality with cutting-edge digital technology.</p>
                        <p>Featuring superior acoustic performance, the device amplifies heart, lung, and body sounds with exceptional clarity. The integrated noise reduction technology ensures accurate diagnosis even in noisy environments, making it ideal for busy hospitals and clinics.</p>
                        <p>With Bluetooth 5.0 connectivity, you can wirelessly transmit audio to compatible devices for recording, analysis, or telemedicine applications. The long-lasting battery provides over 40 hours of continuous use, ensuring reliability during extended shifts.</p>
                    </div>
                </div>

                <!-- Specifications -->
                <div x-show="activeTab === 'specifications'" class="space-y-4">
                    <h3 class="text-lg font-semibold text-gray-900">Technical Specifications</h3>
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Frequency Range</span>
                                <span class="text-gray-900">20Hz - 20kHz</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Battery Life</span>
                                <span class="text-gray-900">40+ hours</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Weight</span>
                                <span class="text-gray-900">180g</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Connectivity</span>
                                <span class="text-gray-900">Bluetooth 5.0</span>
                            </div>
                        </div>
                        <div class="space-y-3">
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Material</span>
                                <span class="text-gray-900">Medical Grade Aluminum</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Warranty</span>
                                <span class="text-gray-900">2 Years</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Certification</span>
                                <span class="text-gray-900">CE, FDA Approved</span>
                            </div>
                            <div class="flex justify-between py-2 border-b border-gray-200">
                                <span class="font-medium text-gray-600">Charging Time</span>
                                <span class="text-gray-900">2 hours (USB-C)</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Reviews -->
                <div x-show="activeTab === 'reviews'" class="space-y-6">
                    <div class="flex items-center justify-between">
                        <h3 class="text-lg font-semibold text-gray-900">Customer Reviews</h3>
                        <button class="bg-blue-600 text-white px-4 py-2 rounded-lg text-sm font-medium hover:bg-blue-700 transition-colors">
                            Write a Review
                        </button>
                    </div>
                    
                    <!-- Rating Summary -->
                    <div class="bg-gray-50 p-6 rounded-lg">
                        <div class="flex items-center space-x-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-gray-900">4.8</div>
                                <div class="flex text-yellow-400 justify-center mb-1">★★★★★</div>
                                <div class="text-sm text-gray-600">24 reviews</div>
                            </div>
                            <div class="flex-1 space-y-2">
                                <template x-for="(rating, index) in [5,4,3,2,1]" :key="rating">
                                    <div class="flex items-center space-x-2">
                                        <span class="text-sm text-gray-600 w-8" x-text="rating + ' ★'"></span>
                                        <div class="flex-1 bg-gray-200 rounded-full h-2">
                                            <div class="bg-yellow-400 h-2 rounded-full" 
                                                 :style="'width: ' + (rating === 5 ? '80' : rating === 4 ? '15' : '5') + '%'"></div>
                                        </div>
                                        <span class="text-sm text-gray-600 w-8" x-text="rating === 5 ? '19' : rating === 4 ? '4' : '1'"></span>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>

                    <!-- Individual Reviews -->
                    <div class="space-y-6">
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center text-white font-medium">
                                    SJ
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="font-medium text-gray-900">Dr. Sarah Johnson</span>
                                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">Verified Purchase • 2 weeks ago</div>
                                    <p class="text-gray-700">Excellent sound quality and very easy to use. The Bluetooth connectivity works flawlessly with my tablet for patient records. Highly recommended for any healthcare professional.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-6">
                            <div class="flex items-start space-x-4">
                                <div class="w-10 h-10 bg-green-500 rounded-full flex items-center justify-center text-white font-medium">
                                    MC
                                </div>
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-1">
                                        <span class="font-medium text-gray-900">Dr. Michael Chen</span>
                                        <div class="flex text-yellow-400 text-sm">★★★★★</div>
                                    </div>
                                    <div class="text-sm text-gray-600 mb-2">Verified Purchase • 1 month ago</div>
                                    <p class="text-gray-700">Best digital stethoscope I've used in my 15 years of practice. The battery life is impressive and the build quality is outstanding. Worth every penny.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Shipping -->
                <div x-show="activeTab === 'shipping'" class="space-y-6">
                    <h3 class="text-lg font-semibold text-gray-900">Shipping & Returns</h3>
                    
                    <div class="grid md:grid-cols-2 gap-8">
                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Shipping Information</h4>
                            <div class="space-y-3 text-sm text-gray-700">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">Free Standard Shipping</div>
                                        <div class="text-gray-600">On orders above ₹10,000 (3-5 business days)</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">Express Shipping</div>
                                        <div class="text-gray-600">₹200 (1-2 business days)</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-blue-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">Same Day Delivery</div>
                                        <div class="text-gray-600">Available in select cities (₹500)</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h4 class="font-medium text-gray-900 mb-3">Return Policy</h4>
                            <div class="space-y-3 text-sm text-gray-700">
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">7-Day Return Window</div>
                                        <div class="text-gray-600">Return unused items in original packaging</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">Full Refund</div>
                                        <div class="text-gray-600">Money back guarantee on returns</div>
                                    </div>
                                </div>
                                <div class="flex items-start space-x-3">
                                    <svg class="w-5 h-5 text-green-600 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                    </svg>
                                    <div>
                                        <div class="font-medium">24/7 Support</div>
                                        <div class="text-gray-600">Contact us for return assistance</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal -->
    <div x-show="openImageModal" 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto" 
         style="display: none;">
        <div class="flex items-center justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
            <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity" @click="openImageModal = false"></div>
            <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-4xl sm:w-full">
                <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-lg font-medium text-gray-900">Product Images</h3>
                        <button @click="openImageModal = false" class="text-gray-400 hover:text-gray-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    <div class="aspect-square max-w-2xl mx-auto">
                        <img :src="selectedImage" alt="Product Image" class="w-full h-full object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function productPage() {
    return {
        selectedImage: '{{ asset("images/default.jpg") }}',
        images: [
            '{{ asset("images/default.jpg") }}',
            '{{ asset("images/default.jpg") }}',
            '{{ asset("images/default.jpg") }}',
            '{{ asset("images/default.jpg") }}'
        ],
        quantity: 1,
        activeTab: 'description',
        isWishlisted: false,
        openImageModal: false,
        tabs: [
            { id: 'description', name: 'Description' },
            { id: 'specifications', name: 'Specifications' },
            { id: 'reviews', name: 'Reviews' },
            { id: 'shipping', name: 'Shipping & Returns' }
        ],
        
        addToCart() {
            // Add to cart logic
            alert('Added to cart!');
        },
        
        toggleWishlist() {
            this.isWishlisted = !this.isWishlisted;
        }
    }
}
</script>
@endsection
