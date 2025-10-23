<!-- D Care Featured Categories -->
<section class="py-3 md:py-6 bg-gray-50" x-data="featuredCategories()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-2 md:mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Featured</h2>
            <a href="/categories" class="text-primary-600 hover:text-primary-700 text-sm font-medium flex items-center gap-1">
                View All
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="1.5" stroke-linecap="round" d="M6 4l4 4-4 4"/>
                </svg>
            </a>
        </div>
        
        <!-- Featured Categories Carousel -->
        <div class="relative">
            <!-- Category Cards -->
            <div class="overflow-x-auto scrollbar-hide">
                <div class="flex gap-2 pb-2" style="width: max-content;">
                    <template x-for="category in categories" :key="category.id">
                        <div class="min-w-0 flex-none w-[60px] md:w-[150px]" @click="goToCategory(category)">
                            <a href="#" class="block">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="rounded-[8px] md:rounded-[24px] flex justify-center p-0 md:p-3 border border-[#dde0e3] shadow-none">
                                        <img :src="category.image" :alt="category.name" class="p-1 aspect-square w-[50px] h-[50px] md:w-[116px] md:h-[116px] object-contain">
                                    </div>
                                    <div class="text-center text-[8px] md:text-sm text-[#205375] mt-0.5" x-text="category.name"></div>
                                </div>
                            </a>
                        </div>
                    </template>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
function featuredCategories() {
    return {
        categories: [
            { id: 1, name: 'Hospital', image: '{{ asset("images/hospital.jpg") }}', url: '/categories/hospital' },
            { id: 2, name: 'Clinic', image: '{{ asset("images/clinic.jpg") }}', url: '/categories/clinic' },
            { id: 3, name: 'Dental', image: '{{ asset("images/dental.jpg") }}', url: '/categories/dental' },
            { id: 4, name: 'Surgical Instruments', image: '{{ asset("images/brands/1.jpg") }}', url: '/categories/surgical-instruments' },
            { id: 5, name: 'Diagnostic Tools', image: '{{ asset("images/brands/12.jpg") }}', url: '/categories/diagnostic-tools' },
            { id: 6, name: 'Laboratory Supplies', image: '{{ asset("images/brands/123.jpg") }}', url: '/categories/laboratory-supplies' },
            { id: 7, name: 'Patient Monitoring', image: '{{ asset("images/brands/1.jpg") }}', url: '/categories/patient-monitoring' },
            { id: 8, name: 'Sterilization', image: '{{ asset("images/brands/12.jpg") }}', url: '/categories/sterilization' },
            { id: 9, name: 'Disposables', image: '{{ asset("images/brands/123.jpg") }}', url: '/categories/disposables' },
            { id: 10, name: 'Pharmaceuticals', image: '{{ asset("images/brands/1.jpg") }}', url: '/categories/pharmaceuticals' },
            { id: 11, name: 'Orthopedic', image: '{{ asset("images/brands/12.jpg") }}', url: '/categories/orthopedic' },
            { id: 12, name: 'Cardiology', image: '{{ asset("images/brands/123.jpg") }}', url: '/categories/cardiology' }
        ],
        
        goToCategory(category) {
            window.location.href = category.url;
        }
    }
}
</script>