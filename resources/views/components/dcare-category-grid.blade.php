<!-- D Care Category Grid -->
<section class="py-16 bg-white" x-data="categoryGrid()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Top Categories</h2>
            <a href="/categories" class="text-primary-600 hover:text-primary-700 font-medium transition-colors">View All</a>
        </div>
        
        <!-- Category Grid -->
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-6 gap-4 md:gap-6">
            <template x-for="category in categories" :key="category.id">
                <div 
                    class="group cursor-pointer"
                    @click="goToCategory(category)"
                    @mouseenter="hoveredCategory = category.id"
                    @mouseleave="hoveredCategory = null"
                >
                    <div class="bg-white rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition-all duration-300 group-hover:scale-105">
                        <!-- Category Image -->
                        <div class="relative aspect-square overflow-hidden">
                            <img 
                                :src="category.image" 
                                :alt="category.name"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            >
                            <!-- Overlay -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
                            
                            <!-- Product Count Badge -->
                            <div class="absolute top-3 right-3 bg-white/90 backdrop-blur-sm text-gray-700 text-xs px-2 py-1 rounded-full font-medium">
                                <span x-text="category.productCount"></span> products
                            </div>
                            
                            <!-- Quick View Button -->
                            <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="bg-white/90 backdrop-blur-sm text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-white transition-colors">
                                    Quick View
                                </button>
                            </div>
                        </div>
                        
                        <!-- Category Info -->
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-900 group-hover:text-primary-600 transition-colors mb-1" x-text="category.name"></h3>
                            <p class="text-sm text-gray-500" x-text="category.description"></p>
                            
                            <!-- Popular Products Preview -->
                            <div class="mt-3 flex -space-x-2">
                                <template x-for="product in category.popularProducts.slice(0, 3)" :key="product.id">
                                    <div class="w-6 h-6 bg-gray-100 rounded-full border-2 border-white overflow-hidden">
                                        <img :src="product.image" :alt="product.name" class="w-full h-full object-cover">
                                    </div>
                                </template>
                                <div x-show="category.popularProducts.length > 3" class="w-6 h-6 bg-primary-100 rounded-full border-2 border-white flex items-center justify-center">
                                    <span class="text-xs text-primary-600 font-medium">+<span x-text="category.popularProducts.length - 3"></span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </template>
        </div>
        
        <!-- Featured Categories Section -->
        <div class="mt-16">
            <h3 class="text-2xl font-bold text-gray-900 text-center mb-8">Featured Categories</h3>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <template x-for="featured in featuredCategories" :key="featured.id">
                    <div 
                        class="relative group cursor-pointer overflow-hidden rounded-xl"
                        @click="goToCategory(featured)"
                    >
                        <div class="aspect-[4/3] overflow-hidden">
                            <img 
                                :src="featured.image" 
                                :alt="featured.name"
                                class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110"
                            >
                        </div>
                        
                        <!-- Content Overlay -->
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent flex items-end p-6">
                            <div class="text-white">
                                <h4 class="text-xl font-bold mb-2" x-text="featured.name"></h4>
                                <p class="text-white/90 mb-3" x-text="featured.description"></p>
                                <div class="flex items-center justify-between">
                                    <span class="text-sm text-white/80" x-text="featured.productCount + ' products'"></span>
                                    <button class="bg-white/20 backdrop-blur-sm text-white px-4 py-2 rounded-lg font-medium hover:bg-white/30 transition-colors">
                                        Explore
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Special Badge -->
                        <div x-show="featured.isSpecial" class="absolute top-4 left-4 bg-accent-500 text-white px-3 py-1 rounded-full text-sm font-medium">
                            Special Offer
                        </div>
                    </div>
                </template>
            </div>
        </div>
        
        <!-- Category Stats -->
        <div class="mt-16 bg-gray-50 rounded-2xl p-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
                <div>
                    <div class="text-3xl font-bold text-primary-600 mb-2" x-text="totalCategories"></div>
                    <div class="text-gray-600">Categories</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-600 mb-2" x-text="totalProducts"></div>
                    <div class="text-gray-600">Products</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-600 mb-2" x-text="totalBrands"></div>
                    <div class="text-gray-600">Brands</div>
                </div>
                <div>
                    <div class="text-3xl font-bold text-primary-600 mb-2">24/7</div>
                    <div class="text-gray-600">Support</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function categoryGrid() {
    return {
        hoveredCategory: null,
        categories: [
            {
                id: 1,
                name: 'Dental Equipment',
                description: 'Professional dental equipment',
                image: '{{ asset("images/dental.jpg") }}',
                productCount: 45,
                popularProducts: [
                    { id: 1, name: 'Dental Chair', image: '{{ asset("images/brands/1.jpg") }}' },
                    { id: 2, name: 'Airotor', image: '{{ asset("images/brands/12.jpg") }}' },
                    { id: 3, name: 'Autoclave', image: '{{ asset("images/brands/123.jpg") }}' }
                ]
            },
            {
                id: 2,
                name: 'Hospital Equipment',
                description: 'Hospital medical equipment',
                image: '{{ asset("images/hospital.jpg") }}',
                productCount: 32,
                popularProducts: [
                    { id: 1, name: 'Patient Monitor', image: '{{ asset("images/brands/1.jpg") }}' },
                    { id: 2, name: 'Ventilator', image: '{{ asset("images/brands/12.jpg") }}' },
                    { id: 3, name: 'Defibrillator', image: '{{ asset("images/brands/123.jpg") }}' }
                ]
            },
            {
                id: 3,
                name: 'Clinic Essentials',
                description: 'Essential clinic equipment',
                image: '{{ asset("images/clinic.jpg") }}',
                productCount: 28,
                popularProducts: [
                    { id: 1, name: 'Stethoscope', image: '{{ asset("images/brands/1.jpg") }}' },
                    { id: 2, name: 'Blood Pressure Monitor', image: '{{ asset("images/brands/12.jpg") }}' },
                    { id: 3, name: 'Thermometer', image: '{{ asset("images/brands/123.jpg") }}' }
                ]
            },
            {
                id: 4,
                name: 'Special Offers',
                description: 'Special discounted products',
                image: '{{ asset("images/offer/special.jpg") }}',
                productCount: 18,
                popularProducts: [
                    { id: 1, name: 'Discount Package', image: '{{ asset("images/offer/discount.jpg") }}' },
                    { id: 2, name: 'Special Deal', image: '{{ asset("images/offer/aspecial.jpg") }}' }
                ]
            },
            {
                id: 5,
                name: 'Diagnostic Equipment',
                description: 'Medical diagnostic tools',
                image: '{{ asset("images/default.jpg") }}',
                productCount: 24,
                popularProducts: [
                    { id: 1, name: 'X-Ray Machine', image: '{{ asset("images/brands/1.jpg") }}' },
                    { id: 2, name: 'Ultrasound', image: '{{ asset("images/brands/12.jpg") }}' },
                    { id: 3, name: 'ECG Machine', image: '{{ asset("images/brands/123.jpg") }}' }
                ]
            },
            {
                id: 6,
                name: 'Surgical Instruments',
                description: 'Professional surgical tools',
                image: '{{ asset("images/default.jpg") }}',
                productCount: 36,
                popularProducts: [
                    { id: 1, name: 'Surgical Scissors', image: '{{ asset("images/brands/1.jpg") }}' },
                    { id: 2, name: 'Forceps', image: '{{ asset("images/brands/12.jpg") }}' },
                    { id: 3, name: 'Scalpel', image: '{{ asset("images/brands/123.jpg") }}' }
                ]
            }
        ],
        featuredCategories: [
            {
                id: 1,
                name: 'Complete Dental Setup',
                description: 'Everything you need for a new dental practice',
                image: '{{ asset("images/dental.jpg") }}',
                productCount: 250,
                isSpecial: true
            },
            {
                id: 2,
                name: 'Emergency Medical Kit',
                description: 'Essential equipment for emergency care',
                image: '{{ asset("images/hospital.jpg") }}',
                productCount: 85,
                isSpecial: false
            },
            {
                id: 3,
                name: 'Laboratory Equipment',
                description: 'Professional lab equipment and supplies',
                image: '{{ asset("images/clinic.jpg") }}',
                productCount: 120,
                isSpecial: true
            }
        ],
        
        get totalCategories() {
            return this.categories.length;
        },
        
        get totalProducts() {
            return this.categories.reduce((sum, category) => sum + category.productCount, 0);
        },
        
        get totalBrands() {
            return 150; // This would come from API
        },
        
        goToCategory(category) {
            window.location.href = `/categories/${category.id}`;
        }
    }
}
</script>
