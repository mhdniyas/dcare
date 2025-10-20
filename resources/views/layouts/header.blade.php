<header class="fixed top-0 w-full z-50 bg-white/95 backdrop-blur-sm border-b border-gray-200 shadow-sm">
    <nav class="container mx-auto px-4 py-4">
        <div class="flex items-center justify-between">
            <!-- Logo -->
            <div class="flex items-center space-x-3">
                <div class="w-10 h-10 bg-blue-600 rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gray-800">D Care</span>
            </div>

            <!-- Desktop Navigation -->
            <div class="hidden md:flex items-center space-x-8">
                <a href="/" class="text-gray-600 hover:text-blue-600 transition-colors">Home</a>
                <a href="/categories" class="text-gray-600 hover:text-blue-600 transition-colors">Categories</a>
                <a href="/marketplace" class="text-gray-600 hover:text-blue-600 transition-colors">Marketplace</a>
                <a href="/about-us" class="text-gray-600 hover:text-blue-600 transition-colors">About</a>
                <a href="/contact-us" class="text-gray-600 hover:text-blue-600 transition-colors">Contact</a>
            </div>

            <!-- CTA Button -->
            <div class="hidden md:block">
                <a href="/quote" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition-colors">
                    Get Quote
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <button id="mobile-menu-btn" class="md:hidden p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                </svg>
            </button>
        </div>
    </nav>
</header>
