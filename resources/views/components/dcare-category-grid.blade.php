<!-- D Care Category Grid -->
<section class="py-16 bg-white" x-data="categoryGrid()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Top Categories</h2>
            <a href="{{ route('categories.index') }}" class="text-primary-600 hover:text-primary-700 font-medium transition-colors">View All</a>
        </div>
        
        <!-- Category Grid -->
        <div class="grid grid-cols-3 md:grid-cols-3 gap-4 md:gap-6 max-w-4xl mx-auto">
            <template x-for="category in categories.slice(0, 3)" :key="category.id">
                <div 
                    class="group cursor-pointer"
                    @click="goToCategory(category)"
                    @mouseenter="hoveredCategory = category.id"
                    @mouseleave="hoveredCategory = null"
                >
                    <div class="bg-white rounded-lg shadow-sm hover:shadow-md transition-shadow">
                        <!-- Category Image -->
                        <div class="relative aspect-video md:aspect-square overflow-hidden">
                            <img 
                                :src="category.image" 
                                :alt="category.name"
                                class="w-full h-full object-cover"
                            >
                        </div>
                        
                        <!-- Category Info -->
                        <div class="p-3 text-center">
                            <h3 class="font-semibold text-gray-900 text-sm" x-text="category.name"></h3>
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
    </div>
</section>

<script>
function categoryGrid() {
    return {
        hoveredCategory: null,
        categories: [
            {
                id: 1,
                name: 'Hospital',
                image: '{{ asset("images/hospital.jpg") }}'
            },
            {
                id: 2,
                name: 'Clinic',
                image: '{{ asset("images/clinic.jpg") }}'
            },
            {
                id: 3,
                name: 'Dental',
                image: '{{ asset("images/dental.jpg") }}'
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
        

        
        goToCategory(category) {
            // Map category names to routes
            const categoryRoutes = {
                'Dental Equipment': '{{ route('categories.dental') }}',
                'Hospital Equipment': '{{ route('categories.hospital') }}',
                'Clinic Essentials': '{{ route('categories.clinic') }}'
            };
            
            const route = categoryRoutes[category.name] || '{{ route('categories.index') }}';
            window.location.href = route;
        }
    }
}
</script>
