<!-- D Care Search Modal -->
<div 
    x-data="searchModal()"
    x-show="isOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-50 z-50 flex items-start justify-center p-4"
    @click="closeModal()"
    @open-search-modal.window="openModal()"
>
    <div 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-95 translate-y-4"
        x-transition:enter-end="opacity-100 scale-100 translate-y-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="opacity-100 scale-100 translate-y-0"
        x-transition:leave-end="opacity-0 scale-95 translate-y-4"
        class="bg-white rounded-xl shadow-strong w-full max-w-4xl mt-20"
        @click.stop
    >
        <!-- Search Header -->
        <div class="p-6 border-b border-gray-200">
            <div class="flex items-center justify-between mb-4">
                <h2 class="text-2xl font-bold text-gray-900">Search Products</h2>
                <button 
                    @click="closeModal()"
                    class="text-gray-500 hover:text-gray-700 transition-colors"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Search Input -->
            <div class="relative">
                <input 
                    type="text" 
                    placeholder="Search for medical equipment, instruments, supplies..."
                    x-model="searchQuery"
                    @input="performSearch()"
                    @keyup.enter="selectFirstResult()"
                    @keydown.arrow-down.prevent="navigateResults(1)"
                    @keydown.arrow-up.prevent="navigateResults(-1)"
                    @keydown.escape="closeModal()"
                    class="w-full px-4 py-4 pr-12 text-lg border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                    x-ref="searchInput"
                >
                <button 
                    @click="performSearch()"
                    class="absolute right-2 top-1/2 -translate-y-1/2 bg-primary-600 text-white p-2 rounded-lg hover:bg-primary-700 transition-colors"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
        </div>
        
        <!-- Search Results -->
        <div class="max-h-96 overflow-y-auto">
            <!-- Recent Searches -->
            <div x-show="!searchQuery && recentSearches.length > 0" class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Recent Searches</h3>
                <div class="space-y-2">
                    <template x-for="search in recentSearches" :key="search">
                        <button 
                            @click="selectRecentSearch(search)"
                            class="w-full text-left px-4 py-3 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors flex items-center justify-between"
                        >
                            <span class="text-gray-700" x-text="search"></span>
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </button>
                    </template>
                </div>
                
                <button 
                    @click="clearRecentSearches()"
                    class="mt-4 text-sm text-gray-500 hover:text-gray-700 transition-colors"
                >
                    Clear Recent Searches
                </button>
            </div>
            
            <!-- Popular Categories -->
            <div x-show="!searchQuery" class="p-6 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Popular Categories</h3>
                <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                    <template x-for="category in popularCategories" :key="category.id">
                        <button 
                            @click="searchByCategory(category)"
                            class="p-4 bg-gray-50 hover:bg-gray-100 rounded-lg transition-colors text-left"
                        >
                            <div class="w-12 h-12 bg-primary-100 rounded-lg flex items-center justify-center mb-3">
                                <img :src="category.icon" :alt="category.name" class="w-6 h-6">
                            </div>
                            <h4 class="font-medium text-gray-900" x-text="category.name"></h4>
                            <p class="text-sm text-gray-500" x-text="category.count + ' products'"></p>
                        </button>
                    </template>
                </div>
            </div>
            
            <!-- Search Suggestions -->
            <div x-show="searchQuery && searchSuggestions.length > 0" class="p-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Suggestions</h3>
                <div class="space-y-2">
                    <template x-for="(suggestion, index) in searchSuggestions" :key="suggestion.id">
                        <button 
                            @click="selectSuggestion(suggestion)"
                            :class="selectedIndex === index ? 'bg-primary-50 border-primary-200' : 'bg-white border-gray-200'"
                            class="w-full text-left p-4 border rounded-lg hover:bg-gray-50 transition-colors"
                        >
                            <div class="flex items-center space-x-4">
                                <div class="w-12 h-12 bg-gray-100 rounded-lg flex items-center justify-center overflow-hidden">
                                    <img :src="suggestion.image" :alt="suggestion.name" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900" x-text="suggestion.name"></h4>
                                    <p class="text-sm text-gray-500" x-text="suggestion.category"></p>
                                    <div class="flex items-center mt-1">
                                        <span class="text-sm font-semibold text-primary-600" x-text="`₹${suggestion.price.toLocaleString()}`"></span>
                                        <div class="flex items-center ml-3">
                                            <svg class="w-3 h-3 text-accent-400 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span class="text-xs text-gray-500 ml-1" x-text="suggestion.rating"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </button>
                    </template>
                </div>
            </div>
            
            <!-- Search Results -->
            <div x-show="searchQuery && searchResults.length > 0" class="p-6 border-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">
                    Search Results 
                    <span class="text-sm font-normal text-gray-500" x-text="`(${searchResults.length} found)`"></span>
                </h3>
                <div class="space-y-4">
                    <template x-for="(result, index) in searchResults" :key="result.id">
                        <button 
                            @click="selectResult(result)"
                            :class="selectedIndex === (searchSuggestions.length + index) ? 'bg-primary-50 border-primary-200' : 'bg-white border-gray-200'"
                            class="w-full text-left p-4 border rounded-lg hover:bg-gray-50 transition-colors"
                        >
                            <div class="flex items-center space-x-4">
                                <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center overflow-hidden">
                                    <img :src="result.image" :alt="result.name" class="w-full h-full object-cover">
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-medium text-gray-900" x-text="result.name"></h4>
                                    <p class="text-sm text-gray-500" x-text="result.brand + ' • ' + result.category"></p>
                                    <div class="flex items-center mt-2">
                                        <span class="text-lg font-semibold text-primary-600" x-text="`₹${result.price.toLocaleString()}`"></span>
                                        <div class="flex items-center ml-4">
                                            <svg class="w-4 h-4 text-accent-400 fill-current" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                            </svg>
                                            <span class="text-sm text-gray-500 ml-1" x-text="result.rating"></span>
                                        </div>
                                        <span class="text-sm text-gray-500 ml-4" x-text="result.stock"></span>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-2">
                                    <button 
                                        @click.stop="addToWishlist(result.id)"
                                        class="p-2 text-gray-400 hover:text-red-500 transition-colors"
                                    >
                                        <svg class="w-5 h-5" :class="isInWishlist(result.id) ? 'text-red-500 fill-current' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                        </svg>
                                    </button>
                                    <button 
                                        @click.stop="addToCart(result)"
                                        class="bg-primary-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-primary-700 transition-colors"
                                    >
                                        Add to Cart
                                    </button>
                                </div>
                            </div>
                        </button>
                    </template>
                </div>
            </div>
            
            <!-- No Results -->
            <div x-show="searchQuery && searchSuggestions.length === 0 && searchResults.length === 0 && !isSearching" class="p-6 text-center">
                <div class="w-16 h-16 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-8 h-8 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.172 16.172a4 4 0 015.656 0M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">No results found</h3>
                <p class="text-gray-500 mb-4">Try searching with different keywords or browse our categories</p>
                <button 
                    @click="browseCategories()"
                    class="bg-primary-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-700 transition-colors"
                >
                    Browse Categories
                </button>
            </div>
            
            <!-- Loading State -->
            <div x-show="isSearching" class="p-6 text-center">
                <div class="inline-flex items-center space-x-2">
                    <div class="w-4 h-4 bg-primary-600 rounded-full animate-pulse"></div>
                    <div class="w-4 h-4 bg-primary-600 rounded-full animate-pulse" style="animation-delay: 0.1s"></div>
                    <div class="w-4 h-4 bg-primary-600 rounded-full animate-pulse" style="animation-delay: 0.2s"></div>
                </div>
                <p class="text-gray-500 mt-2">Searching...</p>
            </div>
        </div>
        
        <!-- Search Footer -->
        <div class="p-6 border-t border-gray-200 bg-gray-50">
            <div class="flex items-center justify-between">
                <div class="text-sm text-gray-500">
                    <span>Press <kbd class="px-2 py-1 bg-gray-200 rounded text-xs">Enter</kbd> to search</span>
                    <span class="mx-2">•</span>
                    <span>Press <kbd class="px-2 py-1 bg-gray-200 rounded text-xs">Esc</kbd> to close</span>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button 
                        @click="viewAllResults()"
                        x-show="searchQuery && (searchResults.length > 0 || searchSuggestions.length > 0)"
                        class="text-primary-600 hover:text-primary-700 font-medium transition-colors"
                    >
                        View All Results
                    </button>
                    <button 
                        @click="closeModal()"
                        class="bg-gray-200 text-gray-700 px-4 py-2 rounded-lg font-medium hover:bg-gray-300 transition-colors"
                    >
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function searchModal() {
    return {
        isOpen: false,
        searchQuery: '',
        searchSuggestions: [],
        searchResults: [],
        recentSearches: [],
        popularCategories: [],
        isSearching: false,
        selectedIndex: -1,
        wishlist: [],
        
        init() {
            this.loadRecentSearches();
            this.loadWishlist();
            this.loadPopularCategories();
            
            // Focus search input when modal opens
            this.$watch('isOpen', (value) => {
                if (value) {
                    this.$nextTick(() => {
                        this.$refs.searchInput.focus();
                    });
                }
            });
        },
        
        openModal() {
            this.isOpen = true;
            document.body.style.overflow = 'hidden';
        },
        
        closeModal() {
            this.isOpen = false;
            this.searchQuery = '';
            this.searchSuggestions = [];
            this.searchResults = [];
            this.selectedIndex = -1;
            document.body.style.overflow = '';
        },
        
        async performSearch() {
            if (!this.searchQuery.trim()) {
                this.searchSuggestions = [];
                this.searchResults = [];
                return;
            }
            
            this.isSearching = true;
            
            try {
                // Simulate API calls
                const [suggestionsResponse, resultsResponse] = await Promise.all([
                    fetch(`/api/search/suggestions?q=${encodeURIComponent(this.searchQuery)}`),
                    fetch(`/api/search/results?q=${encodeURIComponent(this.searchQuery)}`)
                ]);
                
                const suggestionsData = await suggestionsResponse.json();
                const resultsData = await resultsResponse.json();
                
                this.searchSuggestions = suggestionsData.suggestions || [];
                this.searchResults = resultsData.results || [];
                
                // Add to recent searches
                this.addToRecentSearches(this.searchQuery);
                
            } catch (error) {
                console.error('Search error:', error);
                this.searchSuggestions = [];
                this.searchResults = [];
            } finally {
                this.isSearching = false;
            }
        },
        
        navigateResults(direction) {
            const totalItems = this.searchSuggestions.length + this.searchResults.length;
            
            if (direction === 1) {
                this.selectedIndex = Math.min(totalItems - 1, this.selectedIndex + 1);
            } else {
                this.selectedIndex = Math.max(-1, this.selectedIndex - 1);
            }
        },
        
        selectFirstResult() {
            if (this.searchSuggestions.length > 0) {
                this.selectSuggestion(this.searchSuggestions[0]);
            } else if (this.searchResults.length > 0) {
                this.selectResult(this.searchResults[0]);
            } else {
                this.viewAllResults();
            }
        },
        
        selectSuggestion(suggestion) {
            this.closeModal();
            window.location.href = `/products/${suggestion.id}`;
        },
        
        selectResult(result) {
            this.closeModal();
            window.location.href = `/products/${result.id}`;
        },
        
        selectRecentSearch(search) {
            this.searchQuery = search;
            this.performSearch();
        },
        
        searchByCategory(category) {
            this.closeModal();
            window.location.href = `/categories/${category.id}`;
        },
        
        browseCategories() {
            this.closeModal();
            window.location.href = '/categories';
        },
        
        viewAllResults() {
            this.closeModal();
            window.location.href = `/search?q=${encodeURIComponent(this.searchQuery)}`;
        },
        
        addToCart(product) {
            this.$dispatch('add-to-cart', product);
        },
        
        addToWishlist(productId) {
            const index = this.wishlist.indexOf(productId);
            if (index > -1) {
                this.wishlist.splice(index, 1);
            } else {
                this.wishlist.push(productId);
            }
            this.saveWishlist();
        },
        
        isInWishlist(productId) {
            return this.wishlist.includes(productId);
        },
        
        addToRecentSearches(search) {
            if (!this.recentSearches.includes(search)) {
                this.recentSearches.unshift(search);
                this.recentSearches = this.recentSearches.slice(0, 5); // Keep only 5 recent searches
                this.saveRecentSearches();
            }
        },
        
        clearRecentSearches() {
            this.recentSearches = [];
            this.saveRecentSearches();
        },
        
        loadRecentSearches() {
            const saved = localStorage.getItem('dcare-recent-searches');
            if (saved) {
                this.recentSearches = JSON.parse(saved);
            }
        },
        
        saveRecentSearches() {
            localStorage.setItem('dcare-recent-searches', JSON.stringify(this.recentSearches));
        },
        
        loadWishlist() {
            const saved = localStorage.getItem('dcare-wishlist');
            if (saved) {
                this.wishlist = JSON.parse(saved);
            }
        },
        
        saveWishlist() {
            localStorage.setItem('dcare-wishlist', JSON.stringify(this.wishlist));
        },
        
        loadPopularCategories() {
            this.popularCategories = [
                {
                    id: 'dental-chairs',
                    name: 'Dental Chairs',
                    icon: '{{ asset("images/icons/dental-chair.svg") }}',
                    count: 45
                },
                {
                    id: 'airotors',
                    name: 'Airotors',
                    icon: '{{ asset("images/icons/airotor.svg") }}',
                    count: 32
                },
                {
                    id: 'autoclaves',
                    name: 'Autoclaves',
                    icon: '{{ asset("images/icons/autoclave.svg") }}',
                    count: 36
                },
                {
                    id: 'composites',
                    name: 'Composites',
                    icon: '{{ asset("images/icons/composite.svg") }}',
                    count: 28
                },
                {
                    id: 'cameras',
                    name: 'Cameras',
                    icon: '{{ asset("images/icons/camera.svg") }}',
                    count: 18
                },
                {
                    id: 'endomotors',
                    name: 'Endomotors',
                    icon: '{{ asset("images/icons/endomotor.svg") }}',
                    count: 24
                },
                {
                    id: 'rotary-files',
                    name: 'Rotary Files',
                    icon: '{{ asset("images/icons/files.svg") }}',
                    count: 52
                },
                {
                    id: 'cements',
                    name: 'Cements',
                    icon: '{{ asset("images/icons/cement.svg") }}',
                    count: 41
                }
            ];
        }
    }
}
</script>
