<!-- D Care Product Grid -->
<section class="py-16 bg-white" x-data="productGrid()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex flex-col md:flex-row md:items-center md:justify-between mb-8">
            <div>
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-2">Our Products</h2>
                <p class="text-lg text-gray-600">Discover our comprehensive range of medical equipment and supplies</p>
            </div>
            
            <!-- View Toggle -->
            <div class="flex items-center space-x-2 mt-4 md:mt-0">
                <span class="text-sm text-gray-600">View:</span>
                <button 
                    @click="viewMode = 'grid'"
                    :class="viewMode === 'grid' ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-600'"
                    class="p-2 rounded-lg transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
                    </svg>
                </button>
                <button 
                    @click="viewMode = 'list'"
                    :class="viewMode === 'list' ? 'bg-primary-600 text-white' : 'bg-gray-200 text-gray-600'"
                    class="p-2 rounded-lg transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Filters and Sorting -->
        <div class="bg-gray-50 rounded-xl p-6 mb-8">
            <div class="flex flex-col lg:flex-row lg:items-center lg:justify-between space-y-4 lg:space-y-0">
                <!-- Filters -->
                <div class="flex flex-wrap items-center space-x-4">
                    <div class="flex items-center space-x-2">
                        <label class="text-sm font-medium text-gray-700">Category:</label>
                        <select 
                            x-model="selectedCategory"
                            @change="applyFilters()"
                            class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                        >
                            <option value="">All Categories</option>
                            <template x-for="category in categories" :key="category.id">
                                <option :value="category.id" x-text="category.name"></option>
                            </template>
                        </select>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <label class="text-sm font-medium text-gray-700">Brand:</label>
                        <select 
                            x-model="selectedBrand"
                            @change="applyFilters()"
                            class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                        >
                            <option value="">All Brands</option>
                            <template x-for="brand in brands" :key="brand.id">
                                <option :value="brand.id" x-text="brand.name"></option>
                            </template>
                        </select>
                    </div>
                    
                    <div class="flex items-center space-x-2">
                        <label class="text-sm font-medium text-gray-700">Price:</label>
                        <select 
                            x-model="priceRange"
                            @change="applyFilters()"
                            class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                        >
                            <option value="">Any Price</option>
                            <option value="0-5000">Under ₹5,000</option>
                            <option value="5000-25000">₹5,000 - ₹25,000</option>
                            <option value="25000-50000">₹25,000 - ₹50,000</option>
                            <option value="50000+">Above ₹50,000</option>
                        </select>
                    </div>
                    
                    <button 
                        @click="clearFilters()"
                        class="text-sm text-primary-600 hover:text-primary-700 font-medium"
                    >
                        Clear Filters
                    </button>
                </div>
                
                <!-- Sorting -->
                <div class="flex items-center space-x-2">
                    <label class="text-sm font-medium text-gray-700">Sort by:</label>
                    <select 
                        x-model="sortBy"
                        @change="applySorting()"
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                    >
                        <option value="name">Name A-Z</option>
                        <option value="name_desc">Name Z-A</option>
                        <option value="price">Price Low-High</option>
                        <option value="price_desc">Price High-Low</option>
                        <option value="rating">Rating</option>
                        <option value="newest">Newest First</option>
                    </select>
                </div>
            </div>
            
            <!-- Active Filters -->
            <div x-show="activeFilters.length > 0" class="mt-4 pt-4 border-t border-gray-200">
                <div class="flex items-center space-x-2">
                    <span class="text-sm font-medium text-gray-700">Active filters:</span>
                    <template x-for="filter in activeFilters" :key="filter.key">
                        <span class="inline-flex items-center px-3 py-1 bg-primary-100 text-primary-800 text-sm rounded-full">
                            <span x-text="filter.label"></span>
                            <button 
                                @click="removeFilter(filter.key)"
                                class="ml-2 text-primary-600 hover:text-primary-800"
                            >
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </span>
                    </template>
                </div>
            </div>
        </div>
        
        <!-- Results Summary -->
        <div class="flex items-center justify-between mb-6">
            <p class="text-gray-600">
                Showing <span x-text="filteredProducts.length"></span> of <span x-text="products.length"></span> products
            </p>
            
            <!-- Pagination Info -->
            <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                    <label class="text-sm text-gray-600">Show:</label>
                    <select 
                        x-model="itemsPerPage"
                        @change="updatePagination()"
                        class="px-2 py-1 border border-gray-300 rounded focus:outline-none focus:border-primary-500"
                    >
                        <option value="12">12</option>
                        <option value="24">24</option>
                        <option value="48">48</option>
                    </select>
                </div>
            </div>
        </div>
        
        <!-- Product Grid/List -->
        <div x-show="viewMode === 'grid'" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <template x-for="product in paginatedProducts" :key="product.id">
                <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group cursor-pointer" @click="openQuickView(product)">
                    <!-- Product Image -->
                    <div class="relative aspect-square overflow-hidden">
                        <img 
                            :src="product.image" 
                            :alt="product.name"
                            class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                        >
                        
                        <!-- Badges -->
                        <div class="absolute top-3 left-3">
                            <span x-show="product.isNew" class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium">New</span>
                            <span x-show="product.isFeatured" class="bg-accent-500 text-white px-2 py-1 rounded-full text-xs font-medium ml-1">Featured</span>
                        </div>
                        
                        <!-- Quick Actions -->
                        <div class="absolute top-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button 
                                @click.stop="toggleWishlist(product.id)"
                                class="w-8 h-8 bg-white/90 backdrop-blur-sm rounded-full flex items-center justify-center hover:bg-white transition-colors"
                            >
                                <svg class="w-4 h-4" :class="isInWishlist(product.id) ? 'text-red-500 fill-current' : 'text-gray-600'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </button>
                        </div>
                        
                        <!-- Add to Cart Button -->
                        <div class="absolute bottom-3 left-3 right-3 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                            <button 
                                @click.stop="addToCart(product)"
                                class="w-full bg-primary-600 text-white py-2 rounded-lg font-medium hover:bg-primary-700 transition-colors"
                            >
                                Add to Cart
                            </button>
                        </div>
                    </div>
                    
                    <!-- Product Info -->
                    <div class="p-4">
                        <div class="flex items-center justify-between mb-2">
                            <span class="text-xs text-gray-500" x-text="product.brand"></span>
                            <div class="flex items-center">
                                <svg class="w-4 h-4 text-accent-400 fill-current" viewBox="0 0 20 20">
                                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                </svg>
                                <span class="text-sm text-gray-600 ml-1" x-text="product.rating"></span>
                            </div>
                        </div>
                        
                        <h3 class="font-semibold text-gray-900 mb-2 line-clamp-2" x-text="product.name"></h3>
                        
                        <div class="flex items-center justify-between">
                            <div>
                                <span class="text-xl font-bold text-primary-600" x-text="`₹${product.price.toLocaleString()}`"></span>
                                <span x-show="product.originalPrice" class="text-sm text-gray-500 line-through ml-2" x-text="`₹${product.originalPrice.toLocaleString()}`"></span>
                            </div>
                            <span x-show="product.discount" class="text-sm text-green-600 font-medium" x-text="`${product.discount}% OFF`"></span>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- List View -->
        <div x-show="viewMode === 'list'" class="space-y-4">
            <template x-for="product in paginatedProducts" :key="product.id">
                <div class="bg-white rounded-xl shadow-soft overflow-hidden hover:shadow-medium transition-all duration-300 group cursor-pointer" @click="openQuickView(product)">
                    <div class="flex">
                        <!-- Product Image -->
                        <div class="w-32 h-32 flex-shrink-0 overflow-hidden">
                            <img 
                                :src="product.image" 
                                :alt="product.name"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            >
                        </div>
                        
                        <!-- Product Info -->
                        <div class="flex-1 p-6">
                            <div class="flex items-start justify-between">
                                <div class="flex-1">
                                    <div class="flex items-center space-x-2 mb-2">
                                        <span class="text-sm text-gray-500" x-text="product.brand"></span>
                                        <span x-show="product.isNew" class="bg-green-500 text-white px-2 py-1 rounded-full text-xs font-medium">New</span>
                                        <span x-show="product.isFeatured" class="bg-accent-500 text-white px-2 py-1 rounded-full text-xs font-medium">Featured</span>
                                    </div>
                                    
                                    <h3 class="text-lg font-semibold text-gray-900 mb-2" x-text="product.name"></h3>
                                    
                                    <p class="text-gray-600 text-sm mb-4 line-clamp-2" x-text="product.description"></p>
                                    
                                    <div class="flex items-center space-x-4">
                                        <div class="flex items-center">
                                            <svg class="w-4 h-4 text-accent-400 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span class="text-sm text-gray-600 ml-1" x-text="product.rating"></span>
                                        </div>
                                        
                                        <div class="text-sm text-gray-500">
                                            <span x-text="product.stock"></span> in stock
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-right ml-6">
                                    <div class="mb-2">
                                        <span class="text-2xl font-bold text-primary-600" x-text="`₹${product.price.toLocaleString()}`"></span>
                                        <span x-show="product.originalPrice" class="text-sm text-gray-500 line-through ml-2" x-text="`₹${product.originalPrice.toLocaleString()}`"></span>
                                    </div>
                                    
                                    <div class="flex items-center space-x-2">
                                        <button 
                                            @click.stop="toggleWishlist(product.id)"
                                            class="p-2 text-gray-400 hover:text-red-500 transition-colors"
                                        >
                                            <svg class="w-5 h-5" :class="isInWishlist(product.id) ? 'text-red-500 fill-current' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                            </svg>
                                        </button>
                                        
                                        <button 
                                            @click.stop="addToCart(product)"
                                            class="bg-primary-600 text-white px-6 py-2 rounded-lg font-medium hover:bg-primary-700 transition-colors"
                                        >
                                            Add to Cart
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- Pagination -->
        <div x-show="totalPages > 1" class="flex items-center justify-center space-x-2 mt-8">
            <button 
                @click="currentPage = Math.max(1, currentPage - 1)"
                :disabled="currentPage === 1"
                class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <template x-for="page in visiblePages" :key="page">
                <button 
                    @click="currentPage = page"
                    :class="currentPage === page ? 'bg-primary-600 text-white' : 'bg-white text-gray-700 hover:bg-gray-50'"
                    class="px-4 py-2 border border-gray-300 rounded-lg transition-colors"
                    x-text="page"
                ></button>
            </template>
            
            <button 
                @click="currentPage = Math.min(totalPages, currentPage + 1)"
                :disabled="currentPage === totalPages"
                class="px-3 py-2 border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
        </div>
        
        <!-- No Results -->
        <div x-show="filteredProducts.length === 0" class="text-center py-12">
            <div class="w-24 h-24 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                </svg>
            </div>
            <h3 class="text-lg font-medium text-gray-900 mb-2">No products found</h3>
            <p class="text-gray-500 mb-6">Try adjusting your filters or search terms</p>
            <button 
                @click="clearFilters()"
                class="bg-primary-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-700 transition-colors"
            >
                Clear Filters
            </button>
        </div>
    </div>
    
    <!-- Quick View Modal -->
    <div 
        x-show="quickViewProduct"
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-center justify-center p-4"
        @click="closeQuickView()"
    >
        <div 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="bg-white rounded-xl max-w-4xl w-full max-h-[90vh] overflow-y-auto"
            @click.stop
        >
            <template x-if="quickViewProduct">
                <div class="p-6">
                    <div class="flex items-start justify-between mb-6">
                        <h2 class="text-2xl font-bold text-gray-900" x-text="quickViewProduct.name"></h2>
                        <button 
                            @click="closeQuickView()"
                            class="text-gray-500 hover:text-gray-700 transition-colors"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                            </svg>
                        </button>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                        <!-- Product Images -->
                        <div>
                            <div class="aspect-square bg-gray-100 rounded-xl overflow-hidden mb-4">
                                <img :src="quickViewProduct.image" :alt="quickViewProduct.name" class="w-full h-full object-cover">
                            </div>
                        </div>
                        
                        <!-- Product Details -->
                        <div>
                            <div class="mb-4">
                                <span class="text-sm text-gray-500" x-text="quickViewProduct.brand"></span>
                                <div class="flex items-center mt-2">
                                    <div class="flex items-center">
                                        <template x-for="i in 5" :key="i">
                                            <svg class="w-4 h-4" :class="i <= quickViewProduct.rating ? 'text-accent-400 fill-current' : 'text-gray-300'" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                        </template>
                                        <span class="text-sm text-gray-600 ml-2" x-text="`${quickViewProduct.rating}/5`"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <p class="text-gray-600 mb-6" x-text="quickViewProduct.description"></p>
                            
                            <div class="mb-6">
                                <div class="flex items-center space-x-4">
                                    <span class="text-3xl font-bold text-primary-600" x-text="`₹${quickViewProduct.price.toLocaleString()}`"></span>
                                    <span x-show="quickViewProduct.originalPrice" class="text-lg text-gray-500 line-through" x-text="`₹${quickViewProduct.originalPrice.toLocaleString()}`"></span>
                                    <span x-show="quickViewProduct.discount" class="bg-green-100 text-green-800 px-2 py-1 rounded-full text-sm font-medium" x-text="`${quickViewProduct.discount}% OFF`"></span>
                                </div>
                            </div>
                            
                            <div class="flex items-center space-x-4 mb-6">
                                <button 
                                    @click="addToCart(quickViewProduct)"
                                    class="flex-1 bg-primary-600 text-white py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors"
                                >
                                    Add to Cart
                                </button>
                                <button 
                                    @click="toggleWishlist(quickViewProduct.id)"
                                    class="p-3 border border-gray-300 rounded-lg hover:bg-gray-50 transition-colors"
                                >
                                    <svg class="w-5 h-5" :class="isInWishlist(quickViewProduct.id) ? 'text-red-500 fill-current' : 'text-gray-600'" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                    </svg>
                                </button>
                            </div>
                            
                            <div class="text-sm text-gray-500">
                                <p><strong>Stock:</strong> <span x-text="quickViewProduct.stock"></span> available</p>
                                <p><strong>SKU:</strong> <span x-text="quickViewProduct.sku"></span></p>
                                <p><strong>Warranty:</strong> <span x-text="quickViewProduct.warranty"></span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
    </div>
</section>

<script>
function productGrid() {
    return {
        viewMode: 'grid',
        selectedCategory: '',
        selectedBrand: '',
        priceRange: '',
        sortBy: 'name',
        itemsPerPage: 12,
        currentPage: 1,
        quickViewProduct: null,
        wishlist: [],
        
        products: [
            {
                id: 1,
                name: 'Professional Dental Chair Deluxe',
                brand: 'MedTech Pro',
                category: 'dental',
                price: 45000,
                originalPrice: 50000,
                discount: 10,
                image: '{{ asset("images/dental.jpg") }}',
                description: 'Advanced dental chair with ergonomic design, LED lighting, and integrated suction system.',
                rating: 4.5,
                stock: 'In Stock',
                sku: 'DC-001',
                warranty: '2 Years',
                isNew: true,
                isFeatured: true
            },
            {
                id: 2,
                name: 'High-Speed Surgical Airotor',
                brand: 'DentCare',
                category: 'dental',
                price: 12500,
                image: '{{ asset("images/brands/1.jpg") }}',
                description: 'Precision surgical handpiece with variable speed control and ergonomic grip.',
                rating: 4.3,
                stock: 'In Stock',
                sku: 'AR-002',
                warranty: '1 Year',
                isNew: false,
                isFeatured: true
            },
            {
                id: 3,
                name: 'Class B Autoclave Sterilizer',
                brand: 'SurgiMax',
                category: 'sterilization',
                price: 85000,
                originalPrice: 95000,
                discount: 11,
                image: '{{ asset("images/brands/12.jpg") }}',
                description: 'Professional sterilization equipment with digital controls and safety features.',
                rating: 4.7,
                stock: 'In Stock',
                sku: 'AC-003',
                warranty: '3 Years',
                isNew: false,
                isFeatured: false
            },
            {
                id: 4,
                name: 'HD Intra Oral Camera',
                brand: 'PharmaCore',
                category: 'diagnostic',
                price: 25000,
                image: '{{ asset("images/brands/123.jpg") }}',
                description: 'High-definition digital camera for intraoral imaging with LED illumination.',
                rating: 4.4,
                stock: 'Low Stock',
                sku: 'IC-004',
                warranty: '2 Years',
                isNew: true,
                isFeatured: false
            },
            {
                id: 5,
                name: 'Endodontic Motor System',
                brand: 'LabTech',
                category: 'endodontics',
                price: 35000,
                image: '{{ asset("images/brands/1.jpg") }}',
                description: 'Advanced endodontic motor with torque control and apex locator integration.',
                rating: 4.6,
                stock: 'In Stock',
                sku: 'EM-005',
                warranty: '2 Years',
                isNew: false,
                isFeatured: true
            },
            {
                id: 6,
                name: 'Composite Resin Kit',
                brand: 'CardioPro',
                category: 'materials',
                price: 2500,
                image: '{{ asset("images/brands/12.jpg") }}',
                description: 'Universal composite resin kit with multiple shades and curing light.',
                rating: 4.2,
                stock: 'In Stock',
                sku: 'CR-006',
                warranty: '1 Year',
                isNew: false,
                isFeatured: false
            }
        ],
        
        categories: [
            { id: 'dental', name: 'Dental Equipment' },
            { id: 'sterilization', name: 'Sterilization' },
            { id: 'diagnostic', name: 'Diagnostic Equipment' },
            { id: 'endodontics', name: 'Endodontics' },
            { id: 'materials', name: 'Dental Materials' }
        ],
        
        brands: [
            { id: 'medtech-pro', name: 'MedTech Pro' },
            { id: 'dentcare', name: 'DentCare' },
            { id: 'surgimax', name: 'SurgiMax' },
            { id: 'pharmacore', name: 'PharmaCore' },
            { id: 'labtech', name: 'LabTech' },
            { id: 'cardiopro', name: 'CardioPro' }
        ],
        
        get filteredProducts() {
            let filtered = [...this.products];
            
            // Category filter
            if (this.selectedCategory) {
                filtered = filtered.filter(product => product.category === this.selectedCategory);
            }
            
            // Brand filter
            if (this.selectedBrand) {
                filtered = filtered.filter(product => product.brand.toLowerCase().replace(/\s+/g, '-') === this.selectedBrand);
            }
            
            // Price filter
            if (this.priceRange) {
                const [min, max] = this.priceRange.split('-').map(Number);
                filtered = filtered.filter(product => {
                    if (max) {
                        return product.price >= min && product.price <= max;
                    } else {
                        return product.price >= min;
                    }
                });
            }
            
            return filtered;
        },
        
        get sortedProducts() {
            const sorted = [...this.filteredProducts];
            
            switch (this.sortBy) {
                case 'name':
                    return sorted.sort((a, b) => a.name.localeCompare(b.name));
                case 'name_desc':
                    return sorted.sort((a, b) => b.name.localeCompare(a.name));
                case 'price':
                    return sorted.sort((a, b) => a.price - b.price);
                case 'price_desc':
                    return sorted.sort((a, b) => b.price - a.price);
                case 'rating':
                    return sorted.sort((a, b) => b.rating - a.rating);
                case 'newest':
                    return sorted.sort((a, b) => b.isNew - a.isNew);
                default:
                    return sorted;
            }
        },
        
        get paginatedProducts() {
            const start = (this.currentPage - 1) * this.itemsPerPage;
            const end = start + this.itemsPerPage;
            return this.sortedProducts.slice(start, end);
        },
        
        get totalPages() {
            return Math.ceil(this.sortedProducts.length / this.itemsPerPage);
        },
        
        get visiblePages() {
            const pages = [];
            const start = Math.max(1, this.currentPage - 2);
            const end = Math.min(this.totalPages, this.currentPage + 2);
            
            for (let i = start; i <= end; i++) {
                pages.push(i);
            }
            
            return pages;
        },
        
        get activeFilters() {
            const filters = [];
            
            if (this.selectedCategory) {
                const category = this.categories.find(c => c.id === this.selectedCategory);
                filters.push({ key: 'category', label: category.name });
            }
            
            if (this.selectedBrand) {
                const brand = this.brands.find(b => b.id === this.selectedBrand);
                filters.push({ key: 'brand', label: brand.name });
            }
            
            if (this.priceRange) {
                filters.push({ key: 'price', label: `₹${this.priceRange}` });
            }
            
            return filters;
        },
        
        init() {
            this.loadWishlist();
        },
        
        applyFilters() {
            this.currentPage = 1;
        },
        
        applySorting() {
            this.currentPage = 1;
        },
        
        updatePagination() {
            this.currentPage = 1;
        },
        
        clearFilters() {
            this.selectedCategory = '';
            this.selectedBrand = '';
            this.priceRange = '';
            this.currentPage = 1;
        },
        
        removeFilter(filterKey) {
            switch (filterKey) {
                case 'category':
                    this.selectedCategory = '';
                    break;
                case 'brand':
                    this.selectedBrand = '';
                    break;
                case 'price':
                    this.priceRange = '';
                    break;
            }
            this.currentPage = 1;
        },
        
        openQuickView(product) {
            this.quickViewProduct = product;
        },
        
        closeQuickView() {
            this.quickViewProduct = null;
        },
        
        addToCart(product) {
            this.$dispatch('add-to-cart', product);
        },
        
        toggleWishlist(productId) {
            const index = this.wishlist.indexOf(productId);
            if (index > -1) {
                this.wishlist.splice(index, 1);
            } else {
                this.wishlist.push(productId);
            }
            this.saveWishlist();
        },
        
        isInWishlist(productId) {
            return this.wishlist.includes(productId);
        },
        
        loadWishlist() {
            const saved = localStorage.getItem('dcare-wishlist');
            if (saved) {
                this.wishlist = JSON.parse(saved);
            }
        },
        
        saveWishlist() {
            localStorage.setItem('dcare-wishlist', JSON.stringify(this.wishlist));
        }
    }
}
</script>
