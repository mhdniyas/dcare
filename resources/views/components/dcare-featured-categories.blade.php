<!-- D Care Featured Categories -->
<section class="py-3 md:py-6 bg-gray-50" x-data="featuredCategories()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-2 md:mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Featured Categories</h2>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            <template x-for="featured in categories" :key="featured.id">
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
</section>

<script>
function featuredCategories() {
    return {
        categories: [
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
            const categoryRoutes = {
                'Complete Dental Setup': '{{ route('categories.dental') }}',
                'Emergency Medical Kit': '{{ route('categories.hospital') }}',
                'Laboratory Equipment': '{{ route('categories.clinic') }}'
            };
            
            const route = categoryRoutes[category.name] || '{{ route('categories.index') }}';
            window.location.href = route;
        }
    }
}
</script>