<!-- D Care Brand Carousel -->
<section class="py-3 md:py-6 bg-gray-50" x-data="brandCarousel()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-2 md:mb-4">
            <h2 class="text-lg font-semibold text-gray-900">Top Brands</h2>
            <a href="/brands" class="text-primary-600 hover:text-primary-700 text-sm font-medium flex items-center gap-1">
                View All
                <svg width="16" height="16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path stroke="currentColor" stroke-width="1.5" stroke-linecap="round" d="M6 4l4 4-4 4"/>
                </svg>
            </a>
        </div>
        
        <!-- Brand Carousel -->
        <div class="relative">
            <!-- Brand Cards -->
            <div class="overflow-x-auto scrollbar-hide">
                <div class="flex gap-2 pb-2" style="width: max-content;">
                    <template x-for="brand in brands" :key="brand.id">
                        <div class="min-w-0 flex-none w-[60px] md:w-[150px]" @click="goToBrand(brand)">
                            <a href="#" class="block">
                                <div class="flex flex-col justify-center items-center">
                                    <div class="rounded-[8px] md:rounded-[24px] flex justify-center p-0 md:p-3 border border-[#dde0e3] shadow-none">
                                        <img :src="brand.logo" :alt="brand.name" class="p-1 aspect-square w-[50px] h-[50px] md:w-[116px] md:h-[116px] object-contain">
                                    </div>
                                    <div class="text-center text-[8px] md:text-sm text-[#205375] mt-0.5" x-text="brand.name"></div>
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
function brandCarousel() {
    return {
        brands: [
            { id: 1, name: 'OrthoMetric', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/orthometric' },
            { id: 2, name: 'GC', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/gc' },
            { id: 3, name: 'Dentsply', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/dentsply' },
            { id: 4, name: 'Waldent', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/waldent' },
            { id: 5, name: 'SuperEndo', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/superendo' },
            { id: 6, name: 'Mani', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/mani' },
            { id: 7, name: 'GDC', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/gdc' },
            { id: 8, name: 'Woodpecker', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/woodpecker' },
            { id: 9, name: 'ET Dental', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/et-dental' },
            { id: 10, name: 'Alchem', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/alchem' }
        ],
        
        goToBrand(brand) {
            window.location.href = brand.url;
        }
    }
}
</script>