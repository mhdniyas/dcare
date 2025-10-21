<!-- D Care Header Component -->
<header class="bg-white shadow-soft sticky top-0 z-50" x-data="headerComponent()">
    <!-- Top Navigation Bar -->
    <div class="bg-primary-600 text-white py-2">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between text-sm">
                <div class="flex items-center space-x-4">
                    <span class="hidden md:inline">Over 20,000+ Medical Products</span>
                    <span class="hidden lg:inline">•</span>
                    <span class="hidden lg:inline">500K+ Users</span>
                </div>
                <div class="flex items-center space-x-4">
                    <a href="/help" class="hover:text-accent-400 transition-colors">Help</a>
                    <a href="/track-order" class="hover:text-accent-400 transition-colors">Track Order</a>
                    <a href="/contact" class="hover:text-accent-400 transition-colors">Contact</a>
                </div>
            </div>
        </div>
    </div>


    <!-- Main Header -->
    <div class="bg-white border-b border-gray-200">
        <div class="container mx-auto px-4">
            <!-- Desktop Layout -->
            <div class="hidden md:block">
                <!-- Row 1: Logo, Search, Account/Cart -->
                <div class="flex items-center justify-between py-4">
                    <!-- Logo -->
                    <div class="flex-shrink-0">
                        <a href="/" class="flex items-center space-x-2 group">
                            <div class="w-10 h-10 bg-primary-600 rounded-lg flex items-center justify-center group-hover:bg-primary-700 transition-colors">
                                <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h1 class="text-2xl font-bold text-primary-600 group-hover:text-primary-700 transition-colors">D Care</h1>
                                <p class="text-xs text-gray-500">Medical Solutions</p>
                            </div>
                        </a>
                    </div>
                    
                    <!-- Search Bar -->
                    <div class="flex-1 mx-8 max-w-2xl">
                        <div class="relative" x-data="{ searchOpen: false }">
                            <input 
                                type="text" 
                                placeholder="Search over 20,000 Medical Products..." 
                                class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200 transition-all"
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
                
                <!-- Row 2: Categories -->
                <div class="flex items-center justify-center space-x-1 py-3 border-t border-gray-200 overflow-x-auto scrollbar-hide">
                    <a href="/categories/hospital" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Hospital Equipment</a>
                    <a href="/categories/clinic" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Clinic Essentials</a>
                    <a href="/categories/dental" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Dental Equipment</a>
                    <a href="/categories/pharmaceuticals" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Pharmaceuticals</a>
                    <a href="/categories/diagnostic" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Diagnostic Equipment</a>
                    <a href="/categories/surgical" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Surgical Instruments</a>
                    <a href="/categories/laboratory" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Laboratory Equipment</a>
                    <a href="/categories/orthopedic" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Orthopedic</a>
                    <a href="/categories/emergency" class="bg-primary-50 text-primary-700 px-4 py-2 rounded-lg text-sm font-medium hover:bg-primary-100 hover:text-primary-800 transition-colors whitespace-nowrap">Emergency Care</a>
                </div>
            </div>

            <!-- Mobile Layout -->
            <div class="md:hidden">
                <!-- Row 1: Logo and Account/Cart -->
                <div class="flex items-center justify-between py-3">
                    <a href="/" class="flex items-center space-x-2">
                        <div class="w-8 h-8 bg-primary-600 rounded-lg flex items-center justify-center">
                            <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <div>
                            <h1 class="text-xl font-bold text-primary-600">D Care</h1>
                            <p class="text-xs text-gray-500">Medical Solutions</p>
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
                            @click="toggleMobileMenu()"
                        >
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                            </svg>
                        </button>
                    </div>
                </div>
                
                <!-- Row 2: Search Bar -->
                <div class="relative mb-3">
                    <input 
                        type="text" 
                        placeholder="Search medical products..." 
                        class="w-full px-4 py-3 pr-12 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                        x-model="searchQuery"
                        @keyup.enter="performSearch()"
                    >
                    <button 
                        class="absolute right-2 top-1/2 -translate-y-1/2 bg-primary-600 text-white p-2 rounded-md hover:bg-primary-700 transition-colors"
                        @click="performSearch()"
                    >
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Mobile Menu Overlay -->
    <div 
        x-show="mobileMenuOpen" 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="fixed inset-0 bg-black bg-opacity-50 z-50 md:hidden"
        @click="mobileMenuOpen = false"
    >
        <div 
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform -translate-x-full"
            x-transition:enter-end="transform translate-x-0"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="transform translate-x-0"
            x-transition:leave-end="transform -translate-x-full"
            class="fixed left-0 top-0 h-full w-80 bg-white shadow-xl"
            @click.stop
        >
            <div class="p-6">
                <div class="flex items-center justify-between mb-6">
                    <h2 class="text-lg font-semibold text-gray-900">Menu</h2>
                    <button @click="mobileMenuOpen = false" class="text-gray-500 hover:text-gray-700">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
                
                <nav class="space-y-4">
                    <a href="/categories/hospital" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Hospital Equipment</a>
                    <a href="/categories/clinic" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Clinic Essentials</a>
                    <a href="/categories/dental" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Dental Equipment</a>
                    <a href="/categories/pharmaceuticals" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Pharmaceuticals</a>
                    <a href="/categories/diagnostic" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Diagnostic Equipment</a>
                    <a href="/categories/surgical" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Surgical Instruments</a>
                    <a href="/categories/laboratory" class="block py-2 text-gray-700 hover:text-primary-600 transition-colors">Laboratory Equipment</a>
                </nav>
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
        
        init() {
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
                window.location.href = `/search?q=${encodeURIComponent(this.searchQuery)}`;
            }
        },
        
        selectSuggestion(suggestion) {
            this.searchQuery = suggestion.name;
            this.searchSuggestions = [];
            window.location.href = `/products/${suggestion.id}`;
        },
        
        toggleMobileMenu() {
            this.mobileMenuOpen = !this.mobileMenuOpen;
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
