<!-- D Care Brand Carousel -->
<section class="py-12 bg-gray-50" x-data="brandCarousel()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-8">
            <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-2">Top Brands</h2>
            <a href="/brands" class="text-primary-600 hover:text-primary-700 font-medium transition-colors">View All</a>
        </div>
        
        <!-- Brand Carousel -->
        <div class="relative">
            <!-- Carousel Container -->
            <div class="overflow-hidden rounded-xl">
                <div 
                    class="flex transition-transform duration-500 ease-in-out"
                    :style="`transform: translateX(-${currentSlide * 100}%)`"
                >
                    <!-- Brand Slide 1 -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6">
                            <template x-for="brand in brands.slice(0, 6)" :key="brand.id">
                                <div class="bg-white rounded-xl p-6 text-center hover:shadow-medium transition-all duration-300 group cursor-pointer" @click="goToBrand(brand)">
                                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-50 rounded-lg flex items-center justify-center overflow-hidden group-hover:scale-110 transition-transform duration-300">
                                        <img :src="brand.logo" :alt="brand.name" class="w-full h-full object-contain">
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-primary-600 transition-colors" x-text="brand.name"></h3>
                                </div>
                            </template>
                        </div>
                    </div>
                    
                    <!-- Brand Slide 2 -->
                    <div class="w-full flex-shrink-0">
                        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4 md:gap-6">
                            <template x-for="brand in brands.slice(6, 12)" :key="brand.id">
                                <div class="bg-white rounded-xl p-6 text-center hover:shadow-medium transition-all duration-300 group cursor-pointer" @click="goToBrand(brand)">
                                    <div class="w-16 h-16 mx-auto mb-4 bg-gray-50 rounded-lg flex items-center justify-center overflow-hidden group-hover:scale-110 transition-transform duration-300">
                                        <img :src="brand.logo" :alt="brand.name" class="w-full h-full object-contain">
                                    </div>
                                    <h3 class="text-sm font-medium text-gray-700 group-hover:text-primary-600 transition-colors" x-text="brand.name"></h3>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Arrows -->
            <button 
                @click="prevSlide()"
                class="absolute left-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-600 hover:text-primary-600 w-10 h-10 rounded-full shadow-medium flex items-center justify-center transition-all duration-300 hover:scale-110"
                :disabled="currentSlide === 0"
                :class="{ 'opacity-50 cursor-not-allowed': currentSlide === 0 }"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
            </button>
            
            <button 
                @click="nextSlide()"
                class="absolute right-4 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-600 hover:text-primary-600 w-10 h-10 rounded-full shadow-medium flex items-center justify-center transition-all duration-300 hover:scale-110"
                :disabled="currentSlide === totalSlides - 1"
                :class="{ 'opacity-50 cursor-not-allowed': currentSlide === totalSlides - 1 }"
            >
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                </svg>
            </button>
            
            <!-- Dots Indicator -->
            <div class="flex justify-center mt-6 space-x-2">
                <template x-for="i in totalSlides" :key="i">
                    <button 
                        @click="goToSlide(i - 1)"
                        class="w-2 h-2 rounded-full transition-all duration-300"
                        :class="currentSlide === i - 1 ? 'bg-primary-600 w-8' : 'bg-gray-300 hover:bg-gray-400'"
                    ></button>
                </template>
            </div>
        </div>
        
        <!-- Auto-play Controls -->
        <div class="flex justify-center mt-4">
            <button 
                @click="toggleAutoplay()"
                class="flex items-center space-x-2 text-sm text-gray-600 hover:text-primary-600 transition-colors"
            >
                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path x-show="isPlaying" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6l5-3-5-3z"/>
                    <path x-show="!isPlaying" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h1m4 0h1m-6-8h8a2 2 0 012 2v8a2 2 0 01-2 2H8a2 2 0 01-2-2V8a2 2 0 012-2z"/>
                </svg>
                <span x-text="isPlaying ? 'Pause' : 'Play'"></span>
            </button>
        </div>
    </div>
</section>

<script>
function brandCarousel() {
    return {
        currentSlide: 0,
        totalSlides: 2,
        isPlaying: true,
        autoplayInterval: null,
        brands: [
            { id: 1, name: 'MedTech Pro', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/medtech-pro' },
            { id: 2, name: 'DentCare', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/dentcare' },
            { id: 3, name: 'SurgiMax', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/surgimax' },
            { id: 4, name: 'PharmaCore', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/pharmacore' },
            { id: 5, name: 'LabTech', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/labtech' },
            { id: 6, name: 'CardioPro', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/cardiopro' },
            { id: 7, name: 'OrthoMax', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/orthomax' },
            { id: 8, name: 'NeuroTech', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/neurotech' },
            { id: 9, name: 'VitalCare', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/vitalcare' },
            { id: 10, name: 'MediCore', logo: '{{ asset("images/brands/1.jpg") }}', url: '/brands/medicore' },
            { id: 11, name: 'BioTech', logo: '{{ asset("images/brands/12.jpg") }}', url: '/brands/biotech' },
            { id: 12, name: 'HealthMax', logo: '{{ asset("images/brands/123.jpg") }}', url: '/brands/healthmax' }
        ],
        
        init() {
            this.startAutoplay();
            
            // Touch/swipe support
            this.setupTouchEvents();
            
            // Keyboard navigation
            this.setupKeyboardEvents();
        },
        
        nextSlide() {
            if (this.currentSlide < this.totalSlides - 1) {
                this.currentSlide++;
            } else {
                this.currentSlide = 0; // Loop back to first slide
            }
        },
        
        prevSlide() {
            if (this.currentSlide > 0) {
                this.currentSlide--;
            } else {
                this.currentSlide = this.totalSlides - 1; // Loop to last slide
            }
        },
        
        goToSlide(index) {
            this.currentSlide = index;
        },
        
        toggleAutoplay() {
            if (this.isPlaying) {
                this.stopAutoplay();
            } else {
                this.startAutoplay();
            }
        },
        
        startAutoplay() {
            this.isPlaying = true;
            this.autoplayInterval = setInterval(() => {
                this.nextSlide();
            }, 4000); // Change slide every 4 seconds
        },
        
        stopAutoplay() {
            this.isPlaying = false;
            if (this.autoplayInterval) {
                clearInterval(this.autoplayInterval);
                this.autoplayInterval = null;
            }
        },
        
        setupTouchEvents() {
            let startX = 0;
            let endX = 0;
            
            this.$el.addEventListener('touchstart', (e) => {
                startX = e.touches[0].clientX;
                this.stopAutoplay(); // Pause autoplay during touch
            });
            
            this.$el.addEventListener('touchend', (e) => {
                endX = e.changedTouches[0].clientX;
                const diffX = startX - endX;
                
                if (Math.abs(diffX) > 50) { // Minimum swipe distance
                    if (diffX > 0) {
                        this.nextSlide();
                    } else {
                        this.prevSlide();
                    }
                }
                
                // Resume autoplay after touch
                setTimeout(() => {
                    if (this.isPlaying) {
                        this.startAutoplay();
                    }
                }, 1000);
            });
        },
        
        setupKeyboardEvents() {
            document.addEventListener('keydown', (e) => {
                if (e.key === 'ArrowLeft') {
                    this.prevSlide();
                } else if (e.key === 'ArrowRight') {
                    this.nextSlide();
                }
            });
        },
        
        goToBrand(brand) {
            window.location.href = brand.url;
        }
    }
}
</script>
