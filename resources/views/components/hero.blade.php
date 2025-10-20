<div x-data="{
    currentSlide: 0,
    slides: [
        { title: 'Future of Healthcare', subtitle: 'Advanced pharmaceutical solutions for modern medical needs', image: 'images/offer/offer.png' },
        { title: 'Special Discount', subtitle: 'Up to 30% off on selected medical equipment', image: 'images/offer/discount.jpg' },
        { title: 'Premium Quality', subtitle: 'Certified medical supplies with international standards', image: 'images/offer/special.jpg' }
    ],
    nextSlide() { this.currentSlide = (this.currentSlide + 1) % this.slides.length },
    prevSlide() { this.currentSlide = (this.currentSlide - 1 + this.slides.length) % this.slides.length }
}" x-init="setInterval(() => nextSlide(), 5000)" class="relative">
    
    <div class="relative h-96 rounded-2xl overflow-hidden bg-white shadow-xl">
        <template x-for="(slide, index) in slides" :key="index">
            <div x-show="currentSlide === index" x-transition class="absolute inset-0">
                <img :src="slide.image" class="w-full h-full object-cover">
                <div class="absolute inset-0 bg-black/40"></div>
                <div class="relative z-10 flex items-center justify-center h-full">
                    <div class="text-center">
                        <h1 class="text-5xl font-bold mb-4 text-white" x-text="slide.title"></h1>
                        <p class="text-xl mb-8 text-gray-200" x-text="slide.subtitle"></p>
                        <button class="bg-blue-600 text-white px-8 py-3 rounded-lg font-semibold hover:bg-blue-700 transition-colors">
                            Explore Products
                        </button>
                    </div>
                </div>
            </div>
        </template>
    </div>

    <button @click="prevSlide()" class="absolute left-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/15 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors shadow-lg">
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
    </button>
    <button @click="nextSlide()" class="absolute right-4 top-1/2 -translate-y-1/2 w-12 h-12 bg-white/15 rounded-full flex items-center justify-center hover:bg-white/30 transition-colors shadow-lg">
        <svg class="w-6 h-6 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
    </button>

    <div class="absolute bottom-4 left-1/2 -translate-x-1/2 flex space-x-2">
        <template x-for="(slide, index) in slides" :key="index">
            <button @click="currentSlide = index" class="w-3 h-3 rounded-full transition-colors" :class="currentSlide === index ? 'bg-white' : 'bg-white/50'"></button>
        </template>
    </div>
</div>