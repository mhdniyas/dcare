<!-- Mobile Navigation Overlay -->
<div id="mobile-nav" class="fixed inset-0 z-50 hidden">
    <div class="absolute inset-0 bg-black/50 backdrop-blur-sm" id="mobile-nav-overlay"></div>
    <div class="absolute right-0 top-0 h-full w-80 glass transform translate-x-full transition-transform duration-300" id="mobile-nav-panel">
        <div class="p-6">
            <div class="flex justify-between items-center mb-8">
                <span class="text-xl font-bold gradient-text">Menu</span>
                <button id="mobile-nav-close" class="p-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <nav class="space-y-6">
                <a href="/" class="block text-lg hover:text-cyan-400 transition-colors">Home</a>
                <a href="/categories" class="block text-lg hover:text-cyan-400 transition-colors">Categories</a>
                <a href="/marketplace" class="block text-lg hover:text-cyan-400 transition-colors">Marketplace</a>
                <a href="/about-us" class="block text-lg hover:text-cyan-400 transition-colors">About</a>
                <a href="/contact-us" class="block text-lg hover:text-cyan-400 transition-colors">Contact</a>
                <a href="/quote" class="block w-full bg-gradient-to-r from-blue-500 to-cyan-400 px-6 py-3 rounded-full mt-8 text-center">
                    Get Quote
                </a>
            </nav>
        </div>
    </div>
</div>
