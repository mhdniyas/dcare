<div 
    x-data="{
        currentSlide: 0,
        slides: [
            { image: 'images/offer/discount.jpg' },
            { image: 'images/offer/special.jpg' }
        ],
        timer: null,
        startX: 0,
        currentX: 0,
        isDragging: false,

        nextSlide() {
            this.currentSlide = (this.currentSlide + 1) % this.slides.length;
        },
        prevSlide() {
            this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length;
        },
        startAutoSlide() {
            this.timer = setInterval(() => this.nextSlide(), 4000);
        },
        stopAutoSlide() {
            clearInterval(this.timer);
            this.timer = null;
        },
        handleTouchStart(e) {
            this.startX = e.touches[0].clientX;
            this.isDragging = true;
            this.stopAutoSlide();
        },
        handleTouchMove(e) {
            if (!this.isDragging) return;
            this.currentX = e.touches[0].clientX;
        },
        handleTouchEnd(e) {
            if (!this.isDragging) return;
            const diff = this.startX - this.currentX;
            if (Math.abs(diff) > 50) {
                if (diff > 0) this.nextSlide();
                else this.prevSlide();
            }
            this.isDragging = false;
            this.startAutoSlide();
        }
    }"
    x-init="startAutoSlide()"
    class="relative w-full h-[25vh] max-h-[25vh] overflow-hidden bg-gray-900 select-none"
    @touchstart="handleTouchStart"
    @touchmove="handleTouchMove"
    @touchend="handleTouchEnd"
>
    <!-- Slides -->
    <template x-for="(slide, index) in slides" :key="index">
        <div
            class="absolute inset-0 transition-transform duration-500 ease-out"
            :style="`transform: translateX(${(index - currentSlide) * 100}%);`"
        >
            <img 
                :src="slide.image" 
                class="w-full h-full object-cover object-center brightness-75"
                draggable="false"
                loading="lazy"
            >
            <!-- Overlay for better visual appeal -->
            <div class="absolute inset-0 bg-gradient-to-r from-black/50 to-transparent"></div>
        </div>
    </template>

    <!-- Navigation Dots -->
    <div class="absolute bottom-3 left-1/2 transform -translate-x-1/2 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button
                @click="currentSlide = index; stopAutoSlide(); startAutoSlide()"
                class="w-3 h-3 rounded-full transition-all duration-300 focus:outline-none"
                :class="currentSlide === index ? 'bg-white scale-150' : 'bg-gray-300/70 hover:bg-gray-100'"
                :aria-label="'Go to slide ' + (index + 1)"
            ></button>
        </template>
    </div>

    <!-- Navigation Arrows -->
    <!-- <button 
        @click="prevSlide(); stopAutoSlide(); startAutoSlide()"
        class="absolute left-2 top-1/2 transform -translate-y-1/2 bg-black/50 rounded-full p-2 text-white text-xl opacity-80 hover:opacity-100 transition-all duration-200 focus:outline-none sm:p-3"
        :class="slides.length > 1 ? '' : 'hidden'"
        aria-label="Previous slide"
    >
        <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7" />
        </svg>
    </button>
    <button 
        @click="nextSlide(); stopAutoSlide(); startAutoSlide()"
        class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-black/50 rounded-full p-2 text-white text-xl opacity-80 hover:opacity-100 transition-all duration-200 focus:outline-none sm:p-3"
        :class="slides.length > 1 ? '' : 'hidden'"
        aria-label="Next slide"
    >
        <svg class="w-6 h-6 sm:w-8 sm:h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7" />
        </svg>
    </button>
</div> -->