<!-- D Care Hero Section -->
<section class="relative bg-gradient-to-br from-primary-600 via-primary-700 to-primary-800 min-h-[25vh] md:min-h-screen flex items-center overflow-hidden" x-data="heroComponent()">
    
    <!-- Video Background -->
    <div class="absolute inset-0 z-0">
        <video 
            class="w-full h-full object-cover opacity-20" 
            autoplay 
            muted 
            loop 
            playsinline
            x-ref="heroVideo"
        >
            <source src="{{ asset('videos/4114797-uhd_3840_2160_25fps.mp4') }}" type="video/mp4">
            <!-- Fallback image if video doesn't load -->
            <div class="w-full h-full bg-gradient-to-br from-primary-600 to-primary-800"></div>
        </video>
        
        <!-- Overlay -->
        <div class="absolute inset-0 bg-gradient-to-br from-primary-600/80 via-primary-700/70 to-primary-800/80"></div>
    </div>
    
    <!-- Background Elements -->
    <div class="absolute inset-0 z-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-white/5 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute bottom-20 right-10 w-96 h-96 bg-accent-400/10 rounded-full blur-3xl animate-pulse-slow"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-white/5 rounded-full blur-3xl animate-pulse-slow"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-20 py-4 md:py-16">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Main Heading - Hidden on mobile -->
            <h1 class="hidden md:block text-5xl lg:text-7xl font-bold text-white mb-6 leading-tight animate-fade-in">
                Search over
                <span class="text-accent-400">20,000</span>
                <br>
                Medical Products
            </h1>
            
            <!-- Mobile-only minimal heading -->
            <h1 class="md:hidden text-2xl font-bold text-white mb-2 animate-fade-in">
                D Care
            </h1>
            
            <!-- Subtitle - Hidden on mobile -->
            <p class="hidden md:block text-xl lg:text-2xl text-white/90 mb-8 max-w-3xl mx-auto leading-relaxed animate-slide-up">
                Your trusted source for premium medical equipment, dental supplies, and pharmaceutical products across India.
            </p>
            
            <!-- Search Bar -->
            <div class="max-w-2xl mx-auto mb-4 md:mb-8 animate-scale-in">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Search for medical equipment, instruments, supplies..." 
                        class="w-full px-6 py-4 pr-16 text-lg border-0 rounded-xl focus:outline-none focus:ring-4 focus:ring-accent-400/30 shadow-strong"
                        x-model="heroSearchQuery"
                        @keyup.enter="performHeroSearch()"
                        @focus="showSearchSuggestions = true"
                        @blur="setTimeout(() => showSearchSuggestions = false, 200)"
                    >
                    <button 
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-accent-500 text-white p-3 rounded-lg hover:bg-accent-600 transition-colors"
                        @click="performHeroSearch()"
                    >
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                    
                    <!-- Search Suggestions -->
                    <div 
                        x-show="showSearchSuggestions && searchSuggestions.length > 0" 
                        x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 scale-95"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-95"
                        class="absolute top-full left-0 right-0 mt-2 bg-white border border-gray-200 rounded-xl shadow-strong z-50 max-h-80 overflow-y-auto"
                    >
                        <template x-for="suggestion in searchSuggestions" :key="suggestion.id">
                            <div 
                                class="px-4 py-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0"
                                @click="selectSuggestion(suggestion)"
                            >
                                <div class="flex items-center space-x-3">
                                    <img :src="suggestion.image" :alt="suggestion.name" class="w-12 h-12 object-cover rounded-lg">
                                    <div>
                                        <p class="font-medium text-gray-900" x-text="suggestion.name"></p>
                                        <p class="text-sm text-gray-500" x-text="suggestion.category"></p>
                                    </div>
                                </div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>
            
            <!-- Top Navigation Menu -->
            <div class="mt-6 animate-slide-up">
                <div class="bg-white/90 backdrop-blur-sm border border-white/50 rounded-xl p-4">
                    <!-- Desktop Navigation -->
                    <div class="hidden md:flex items-center justify-between">
                        <!-- Left Navigation -->
                        <div class="flex items-center space-x-6">
                            <a href="/products" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">All Products</a>
                            <a href="/categories" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Categories</a>
                            <a href="/brands" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Brands</a>
                            <a href="/offers" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Special Offers</a>
                        </div>
                        
                        <!-- Right Navigation -->
                        <div class="flex items-center space-x-6">
                            <a href="/bulk-order" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Bulk Orders</a>
                            <a href="/quote" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Get Quote</a>
                            <a href="/support" class="text-gray-700 hover:text-primary-600 font-medium transition-colors">Support</a>
                        </div>
                    </div>
                    
                    <!-- Mobile Navigation -->
                    <div class="md:hidden" x-data="{ mobileNavOpen: false }">
                        <button 
                            @click="mobileNavOpen = !mobileNavOpen"
                            class="w-full flex items-center justify-between text-gray-700 font-medium"
                        >
                            <span>Navigation Menu</span>
                            <svg class="w-5 h-5 transition-transform" :class="mobileNavOpen ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        
                        <div x-show="mobileNavOpen" x-transition class="mt-4 space-y-3">
                            <div class="grid grid-cols-2 gap-3">
                                <a href="/products" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">All Products</a>
                                <a href="/categories" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Categories</a>
                                <a href="/brands" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Brands</a>
                                <a href="/offers" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Special Offers</a>
                                <a href="/bulk-order" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Bulk Orders</a>
                                <a href="/quote" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Get Quote</a>
                                <a href="/support" class="text-gray-700 hover:text-primary-600 font-medium transition-colors text-sm">Support</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Scrollable Categories -->
            <div class="mt-6 animate-slide-up" x-data="{ selectedCategory: null }">
                <div class="flex overflow-x-auto gap-4 pb-2 scrollbar-hide">
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'dental'; window.location.href = '/categories/dental'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'dental' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Dental Equipment
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'hospital'; window.location.href = '/categories/hospital'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'hospital' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Hospital Equipment
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'lab'; window.location.href = '/categories/lab'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'lab' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Lab Equipment
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'pharma'; window.location.href = '/categories/pharma'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'pharma' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Pharmaceuticals
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'diagnostic'; window.location.href = '/categories/diagnostic'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'diagnostic' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Diagnostic Tools
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'surgical'; window.location.href = '/categories/surgical'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'surgical' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Surgical Instruments
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'orthopedic'; window.location.href = '/categories/orthopedic'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'orthopedic' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Orthopedic
                        </button>
                    </div>
                    <div class="flex-shrink-0">
                        <button 
                            @click="selectedCategory = 'neurology'; window.location.href = '/categories/neurology'"
                            class="bg-white/90 backdrop-blur-sm border border-white/50 text-black px-4 py-2 rounded-lg hover:bg-white transition-colors whitespace-nowrap font-medium"
                            :class="selectedCategory === 'neurology' ? 'bg-white border-white shadow-lg' : ''"
                        >
                            Neurology
                        </button>
                    </div>
                </div>
            </div>
            
            <!-- Quick Stats - Hidden on mobile -->
            <div class="hidden md:grid grid-cols-4 gap-8 mb-8 animate-slide-up">
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center hover:bg-white/20 transition-colors">
                    <div class="text-3xl font-bold text-accent-400 mb-1">20K+</div>
                    <div class="text-sm text-white/80">Products</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center hover:bg-white/20 transition-colors">
                    <div class="text-3xl font-bold text-accent-400 mb-1">500K+</div>
                    <div class="text-sm text-white/80">Users</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center hover:bg-white/20 transition-colors">
                    <div class="text-3xl font-bold text-accent-400 mb-1">15K+</div>
                    <div class="text-sm text-white/80">Followers</div>
                </div>
                <div class="bg-white/10 backdrop-blur-sm border border-white/20 rounded-xl p-6 text-center hover:bg-white/20 transition-colors">
                    <div class="text-3xl font-bold text-accent-400 mb-1">24/7</div>
                    <div class="text-sm text-white/80">Support</div>
                </div>
            </div>
            
            <!-- CTA Buttons - Hidden on mobile -->
            <div class="hidden md:flex flex-row gap-4 justify-center animate-bounce-subtle">
                <a href="/products" class="bg-white text-primary-600 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-gray-50 hover:scale-105 transition-all duration-300 inline-flex items-center justify-center shadow-medium">
                    Shop Now
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
                <a href="/quote" class="bg-accent-500 text-white px-8 py-4 rounded-xl font-semibold text-lg hover:bg-accent-600 hover:scale-105 transition-all duration-300 inline-flex items-center justify-center shadow-medium">
                    Get Quote
                </a>
                <a href="/categories" class="bg-white/20 text-white border border-white/30 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-white/30 hover:scale-105 transition-all duration-300 inline-flex items-center justify-center backdrop-blur-sm">
                    Browse Categories
                </a>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-12 animate-fade-in">
                <p class="text-white/70 text-sm mb-4">Trusted by medical professionals across India</p>
                <div class="flex items-center justify-center space-x-8 opacity-60">
                    <div class="text-white/50 text-xs">✓ Genuine Products</div>
                    <div class="text-white/50 text-xs">✓ 100% Quality Guarantee</div>
                    <div class="text-white/50 text-xs">✓ Nationwide Delivery</div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 animate-bounce">
        <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
        </div>
    </div>
</section>

<script>
function heroComponent() {
    return {
        heroSearchQuery: '',
        searchSuggestions: [],
        showSearchSuggestions: false,
        
        init() {
            // Initialize video
            this.initVideo();
            
            // Watch search query for suggestions
            this.$watch('heroSearchQuery', (value) => {
                if (value.length > 2) {
                    this.debouncedSearch(value);
                } else {
                    this.searchSuggestions = [];
                }
            });
        },
        
        initVideo() {
            // Ensure video plays on mobile
            if (this.$refs.heroVideo) {
                this.$refs.heroVideo.addEventListener('loadeddata', () => {
                    this.$refs.heroVideo.play().catch(() => {
                        // Fallback if autoplay fails
                        console.log('Video autoplay failed, using fallback');
                    });
                });
            }
        },
        
        async debouncedSearch(query) {
            setTimeout(async () => {
                try {
                    const response = await fetch(`/api/search?q=${encodeURIComponent(query)}&limit=5`);
                    const data = await response.json();
                    this.searchSuggestions = data.suggestions || [];
                } catch (error) {
                    console.error('Search error:', error);
                    this.searchSuggestions = [];
                }
            }, 300);
        },
        
        performHeroSearch() {
            if (this.heroSearchQuery.trim()) {
                window.location.href = `/search?q=${encodeURIComponent(this.heroSearchQuery)}`;
            }
        },
        
        selectSuggestion(suggestion) {
            this.heroSearchQuery = suggestion.name;
            this.searchSuggestions = [];
            window.location.href = `/products/${suggestion.id}`;
        }
    }
}
</script>
