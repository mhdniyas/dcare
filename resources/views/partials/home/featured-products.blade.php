<!-- Featured Products Section -->
<section class="py-8 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-6">
            <h2 class="text-xl font-bold text-gray-900 mb-2">Best Seller</h2>
            <a href="/products" class="text-blue-600 text-sm font-medium">View All</a>
        </div>
        
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-3">
            <!-- Product 1 -->
            <div class="bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow duration-300 group">
                <div class="relative">
                    <div class="aspect-square bg-gray-100 rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/default.jpg') }}" alt="Digital Stethoscope" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute top-2 left-2 bg-red-500 text-white px-2 py-1 rounded text-xs font-medium">
                        17% OFF
                    </div>
                    <button class="absolute top-2 right-2 w-6 h-6 bg-white/90 hover:bg-white rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                <div class="p-3">
                    <div class="text-xs text-gray-500 mb-1">Hospital Equipment</div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Digital Stethoscope Pro</h3>
                    <div class="flex items-center space-x-1 mb-2">
                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                        <span class="text-xs text-gray-500">(24)</span>
                    </div>
                    <div class="flex items-center space-x-2 mb-3">
                        <span class="text-sm font-bold text-gray-900">₹15,000</span>
                        <span class="text-xs text-gray-500 line-through">₹18,000</span>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md text-xs font-medium transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Product 2 -->
            <div class="bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow duration-300 group">
                <div class="relative">
                    <div class="aspect-square bg-gray-100 rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/default.jpg') }}" alt="BP Monitor" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute top-2 left-2 bg-green-500 text-white px-2 py-1 rounded text-xs font-medium">
                        25% OFF
                    </div>
                    <button class="absolute top-2 right-2 w-6 h-6 bg-white/90 hover:bg-white rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                <div class="p-3">
                    <div class="text-xs text-gray-500 mb-1">Clinic Equipment</div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Digital BP Monitor</h3>
                    <div class="flex items-center space-x-1 mb-2">
                        <div class="flex text-yellow-400 text-xs">★★★★☆</div>
                        <span class="text-xs text-gray-500">(18)</span>
                    </div>
                    <div class="flex items-center space-x-2 mb-3">
                        <span class="text-sm font-bold text-gray-900">₹6,375</span>
                        <span class="text-xs text-gray-500 line-through">₹8,500</span>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md text-xs font-medium transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Product 3 -->
            <div class="bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow duration-300 group">
                <div class="relative">
                    <div class="aspect-square bg-gray-100 rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/default.jpg') }}" alt="Dental Unit" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute top-2 left-2 bg-blue-500 text-white px-2 py-1 rounded text-xs font-medium">
                        New
                    </div>
                    <button class="absolute top-2 right-2 w-6 h-6 bg-white/90 hover:bg-white rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                <div class="p-3">
                    <div class="text-xs text-gray-500 mb-1">Dental Equipment</div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Portable Dental Unit</h3>
                    <div class="flex items-center space-x-1 mb-2">
                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                        <span class="text-xs text-gray-500">(12)</span>
                    </div>
                    <div class="flex items-center space-x-2 mb-3">
                        <span class="text-sm font-bold text-gray-900">₹85,000</span>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md text-xs font-medium transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
            
            <!-- Product 4 -->
            <div class="bg-white rounded-lg border border-gray-200 hover:shadow-md transition-shadow duration-300 group">
                <div class="relative">
                    <div class="aspect-square bg-gray-100 rounded-t-lg overflow-hidden">
                        <img src="{{ asset('images/default.jpg') }}" alt="Surgical Set" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                    </div>
                    <div class="absolute top-2 left-2 bg-orange-500 text-white px-2 py-1 rounded text-xs font-medium">
                        Hot Deal
                    </div>
                    <button class="absolute top-2 right-2 w-6 h-6 bg-white/90 hover:bg-white rounded-full flex items-center justify-center transition-colors">
                        <svg class="w-3 h-3 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </button>
                </div>
                <div class="p-3">
                    <div class="text-xs text-gray-500 mb-1">Surgical Instruments</div>
                    <h3 class="text-sm font-semibold text-gray-900 mb-2 group-hover:text-blue-600 transition-colors">Premium Surgical Set</h3>
                    <div class="flex items-center space-x-1 mb-2">
                        <div class="flex text-yellow-400 text-xs">★★★★★</div>
                        <span class="text-xs text-gray-500">(31)</span>
                    </div>
                    <div class="flex items-center space-x-2 mb-3">
                        <span class="text-sm font-bold text-gray-900">₹22,500</span>
                        <span class="text-xs text-gray-500 line-through">₹25,000</span>
                    </div>
                    <button class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md text-xs font-medium transition-colors">
                        Add to Cart
                    </button>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-6">
            <a href="/products" class="bg-white border-2 border-blue-600 text-blue-600 hover:bg-blue-600 hover:text-white px-6 py-2 rounded-lg text-sm font-semibold transition-colors inline-flex items-center">
                View All Products
                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>