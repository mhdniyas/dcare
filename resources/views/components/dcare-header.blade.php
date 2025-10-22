<!-- D Care Header Component -->
<header class="bg-white shadow-xl sticky top-0 z-50 backdrop-blur-sm transition-all duration-300" 
        :class="scrolled ? 'bg-white/30' : 'bg-white/95'" 
        x-data="headerComponent()" 
        @scroll.window="scrolled = window.scrollY > 50"
        x-init="scrolled = false">
    <!-- Top Navigation Bar - Desktop Only -->
    <div class="hidden md:block bg-gradient-to-r from-primary-600 via-primary-700 to-primary-800 text-black py-1 shadow-sm">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between text-xs">
                <div class="flex items-center space-x-3">
                    <span class="font-medium text-black">100K+ Products</span>
                    <span class="text-black/60">•</span>
                    <span class="text-black/80">50K+ Users</span>
                </div>
                <div class="flex items-center space-x-6">
                    <a href="{{ route('pages.help') }}" class="text-black hover:text-accent-400 transition-colors font-medium hover:scale-105 transform">Help</a>
                    <a href="{{ route('pages.track-order') }}" class="text-black hover:text-accent-400 transition-colors font-medium hover:scale-105 transform">Track Order</a>
                    <a href="{{ route('pages.contact') }}" class="text-black hover:text-accent-400 transition-colors font-medium hover:scale-105 transform">Contact</a>
                    <a href="{{ route('quote') }}" class="text-black hover:text-accent-400 transition-colors font-medium hover:scale-105 transform">Get Quote</a>
                    <a href="{{ route('pages.about') }}" class="text-black hover:text-accent-400 transition-colors font-medium hover:scale-105 transform">About Us</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Header -->
    <div class="bg-white border-b border-gray-200 shadow-md">
        <div class="container mx-auto px-4">
            <!-- Desktop Layout -->
            <div class="hidden md:block">
                <!-- Row 1: Logo, Search, Account/Cart -->
                <div class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="{{ route('home') }}" class="flex items-center space-x-2 group">
                            <div class="w-10 h-10 bg-gradient-to-br from-primary-600 to-primary-700 rounded-lg flex items-center justify-center group-hover:from-primary-700 group-hover:to-primary-800 transition-all duration-300 shadow-md group-hover:shadow-lg group-hover:scale-105 transform">
                                <img src="{{ asset('dcarelogo.png') }}" alt="D Care Logo" class="w-6 h-6 object-contain">
                            </div>
                            <div>
                                <h1 class="text-xl font-bold text-primary-600 group-hover:text-primary-700 transition-colors">D Care</h1>
                                <p class="text-xs text-gray-500 font-medium">Pharmaceuticals</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Search Bar -->
                    <div class="flex-1 mx-8 max-w-2xl">
                        <div class="relative" x-data="{ searchOpen: false }">
                            <input 
                                type="text" 
                                placeholder="Search Medical Products..." 
                                class="w-full px-3 py-2 pr-10 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-200 transition-all text-sm"
                                x-model="searchQuery"
                                @focus="searchOpen = true"
                                @blur="setTimeout(() => searchOpen = false, 200)"
                                @keyup.enter="performSearch()"
                            >
                            <button 
                                class="absolute right-2 top-1/2 -translate-y-1/2 bg-primary-600 text-white p-2 rounded-md hover:bg-primary-700 transition-colors"
                                @click="performSearch()"
                            >
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                </svg>
                            </button>
                            
                            <!-- Search Suggestions Dropdown -->
                            <div 
                                x-show="searchOpen && searchSuggestions.length > 0" 
                                x-transition:enter="transition ease-out duration-200"
                                x-transition:enter-start="opacity-0 scale-95"
                                x-transition:enter-end="opacity-100 scale-100"
                                x-transition:leave="transition ease-in duration-150"
                                x-transition:leave-start="opacity-100 scale-100"
                                x-transition:leave-end="opacity-0 scale-95"
                                class="absolute top-full left-0 right-0 mt-1 bg-white border border-gray-200 rounded-lg shadow-medium z-50 max-h-80 overflow-y-auto"
                            >
                                <template x-for="suggestion in searchSuggestions" :key="suggestion.id">
                                    <div 
                                        class="px-4 py-3 hover:bg-gray-50 cursor-pointer border-b border-gray-100 last:border-b-0"
                                        @click="selectSuggestion(suggestion)"
                                    >
                                        <div class="flex items-center space-x-3">
                                            <img :src="suggestion.image" :alt="suggestion.name" class="w-10 h-10 object-cover rounded">
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

                    <!-- Account & Cart -->
                    <div class="flex items-center space-x-4">
                        <!-- Account -->
                        <button class="flex flex-col items-center text-gray-700 hover:text-primary-600 transition-colors group">
                            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                            <span class="text-xs mt-1">Account</span>
                        </button>
                        
                        <!-- Cart -->
                        <button 
                            class="flex flex-col items-center text-gray-700 hover:text-primary-600 transition-colors group relative"
                            @click="toggleCart()"
                        >
                            <svg class="w-6 h-6 group-hover:scale-110 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span class="text-xs mt-1">Cart</span>
                            <span 
                                x-show="cartItems.length > 0"
                                class="absolute -top-1 -right-1 bg-accent-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center font-medium"
                                x-text="cartItems.length"
                            ></span>
                        </button>
                    </div>
                </div>
                
                <!-- Row 2: Navigation Menu -->
                <div class="flex items-center justify-center space-x-1 py-3 border-t border-gray-200 overflow-x-auto scrollbar-hide">
                    <a href="{{ route('home') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Home</a>
                    <a href="{{ route('products.index') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Products</a>
                    <a href="{{ route('categories.index') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Categories</a>
                    <a href="{{ route('categories.hospital') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Hospital</a>
                    <a href="{{ route('categories.dental') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Dental</a>
                    <a href="{{ route('categories.clinic') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Clinic</a>
                    <a href="{{ route('marketplace') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Marketplace</a>
                    <a href="{{ route('quote') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Quote</a>
                    <a href="{{ route('pages.about') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">About Us</a>
                    <a href="{{ route('pages.contact') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Contact</a>
                    <a href="{{ route('pages.help') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Help</a>
                    <a href="{{ route('pages.track-order') }}" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Track Order</a>
                </div>
            </div>

            <!-- Mobile Layout -->
            <div class="md:hidden">
                <!-- Combined Row: Logo, Search, and Actions -->
                <div class="flex items-center justify-between py-2">
                    <a href="{{ route('home') }}" class="flex items-center space-x-2 flex-shrink-0">
                        <div class="w-8 h-8 bg-gradient-to-br from-primary-600 to-primary-700 rounded-lg flex items-center justify-center shadow">
                            <img src="{{ asset('dcarelogo.png') }}" alt="D Care Logo" class="w-5 h-5 object-contain">
                        </div>
                        <div>
                            <h1 class="text-base font-bold text-primary-600 leading-tight">D Care</h1>
                            <p class="text-xs text-gray-500 font-medium -mt-0.5">Pharmaceuticals</p>
                        </div>
                    </a>
                    
                    <div class="flex items-center space-x-4">
                        <button class="text-gray-700 hover:text-primary-600 transition-colors">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                            </svg>
                        </button>
                        <button 
                            class="text-gray-700 hover:text-primary-600 transition-colors relative"
                            @click="toggleCart()"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                            </svg>
                            <span 
                                x-show="cartItems.length > 0"
                                class="absolute -top-1 -right-1 bg-accent-500 text-white text-xs rounded-full w-4 h-4 flex items-center justify-center font-medium"
                                x-text="cartItems.length"
                            ></span>
                        </button>
                        <button 
                            class="text-gray-700 hover:text-primary-600 transition-colors"
                            @click="$dispatch('toggle-sidebar')"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Inline Search Bar -->
                <div class="relative flex-1 mx-2 mb-2">
                    <input 
                        type="text" 
                        placeholder="Search products..." 
                        class="w-full px-2 py-1.5 pr-8 border border-gray-300 rounded-md focus:outline-none focus:border-primary-500 focus:ring-1 focus:ring-primary-200 text-xs"
                        x-model="searchQuery"
                        @keyup.enter="performSearch()"
                    >
                    <div class="absolute right-2 top-1/2 -translate-y-1/2 flex items-center justify-center w-8 h-8">
                        <button 
                            x-show="!isLoading"
                            class="bg-primary-600 text-white p-1.5 rounded-md hover:bg-primary-700 transition-colors"
                            @click="performSearch()"
                        >
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                        <div x-show="isLoading" class="transform scale-75">
                            <x-loader />
                        </div>
                    </div>
                </div>
                
                <!-- Compact Mobile Navigation Menu -->
                <div class="mb-2" x-data="{ selectedNav: null }">
                    <div class="p-1.5 bg-gray-100/80 backdrop-blur-sm">
                        <div class="flex overflow-x-auto gap-2 scrollbar-hide no-scrollbar">
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'home'; window.location.href = '{{ route('home') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'home' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Home
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'products'; window.location.href = '{{ route('products.index') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'products' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Products
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'categories'; window.location.href = '{{ route('categories.index') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'categories' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Categories
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'hospital'; window.location.href = '{{ route('categories.hospital') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'hospital' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Hospital
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'dental'; window.location.href = '{{ route('categories.dental') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'dental' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Dental
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'clinic'; window.location.href = '{{ route('categories.clinic') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'clinic' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Clinic
                                </button>
                            </div>
                            <div class="flex-shrink-0">
                                <button 
                                    @click="selectedNav = 'marketplace'; window.location.href = '{{ route('marketplace') }}'"
                                    class="bg-white shadow-sm text-gray-800 px-3 py-1.5 rounded-md hover:bg-primary-50 hover:text-primary-600 transition-all whitespace-nowrap text-xs font-medium"
                                    :class="selectedNav === 'marketplace' ? 'bg-primary-100 text-primary-800' : ''"
                                >
                                    Marketplace
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</header>

<script>
function headerComponent() {
    return {
        searchQuery: '',
        searchSuggestions: [],
        cartItems: [],
        mobileMenuOpen: false,
        cartOpen: false,
        scrolled: false,
        isLoading: false,
        
        init() {
            // Initialize scroll state
            this.scrolled = window.scrollY > 50;
            
            // Load cart from localStorage
            this.loadCart();
            
            // Debounced search
            this.$watch('searchQuery', (value) => {
                if (value.length > 2) {
                    this.debouncedSearch(value);
                } else {
                    this.searchSuggestions = [];
                }
            });
        },
        
        async debouncedSearch(query) {
            // Simulate API call - replace with actual endpoint
            setTimeout(async () => {
                try {
                    const response = await fetch(`/api/search?q=${encodeURIComponent(query)}`);
                    const data = await response.json();
                    this.searchSuggestions = data.suggestions || [];
                } catch (error) {
                    console.error('Search error:', error);
                    this.searchSuggestions = [];
                }
            }, 300);
        },
        
        performSearch() {
            if (this.searchQuery.trim()) {
                this.isLoading = true;
                setTimeout(() => {
                    window.location.href = `/search?q=${encodeURIComponent(this.searchQuery)}`;
                }, 500);
            }
        },
        
        selectSuggestion(suggestion) {
            this.searchQuery = suggestion.name;
            this.searchSuggestions = [];
            window.location.href = `/products/${suggestion.id}`;
        },
        

        
        toggleCart() {
            this.cartOpen = !this.cartOpen;
            // Emit event for cart sidebar
            this.$dispatch('toggle-cart');
        },
        
        loadCart() {
            const savedCart = localStorage.getItem('dcare-cart');
            if (savedCart) {
                this.cartItems = JSON.parse(savedCart);
            }
        },
        
        saveCart() {
            localStorage.setItem('dcare-cart', JSON.stringify(this.cartItems));
        }
    }
}
</script>
