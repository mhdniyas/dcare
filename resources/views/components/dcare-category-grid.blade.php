<!-- D Care Category Grid -->
<section class="py-3 md:py-6 bg-white" x-data="categoryGrid()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-2 md:mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Categories</h2>
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
                        <div class="p-2 md:p-3 text-center">
                            <h3 class="font-semibold text-gray-900 text-xs md:text-sm" x-text="category.name"></h3>
                        </div>
                    </div>
                </div>
            </template>
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
