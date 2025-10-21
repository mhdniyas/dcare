<!-- Main Navigation -->
<nav class="bg-white/15 backdrop-blur-md shadow-xl sticky top-0 z-50 border-b border-white/30">
    <div class="container mx-auto px-4">
        <!-- Desktop Layout -->
        <div class="hidden md:block">
            <!-- Row 1: Logo, Search, Account/Cart -->
            <div class="flex items-center justify-between py-3">
                <a href="/" class="text-2xl font-bold porsche-gradient-text hover:scale-105 transition-all duration-300">D Care</a>
                
                <!-- Search Bar -->
                <div class="flex-1 mx-8 max-w-2xl">
                    <div class="relative">
                        <input type="text" placeholder="Search for medical equipment, instruments, supplies..." 
                               class="w-full px-4 py-2 pr-12 border border-green-300/50 rounded-lg focus:outline-none focus:border-green-400 bg-green-100/20 backdrop-blur-sm text-green-800 placeholder-green-600">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-gradient-to-r from-green-600 to-green-500 text-green-100 p-2 rounded-md hover:from-green-700 hover:to-green-600">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button class="flex flex-col items-center text-green-700 hover:text-green-600 hover:scale-105 transition-all duration-300">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span class="text-xs">Account</span>
                    </button>
                    <button class="flex flex-col items-center text-green-700 hover:text-green-600 hover:scale-105 transition-all duration-300 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="text-xs">Cart</span>
                        <span class="absolute -top-1 -right-1 bg-gradient-to-r from-green-500 to-green-400 text-green-100 text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 2: Categories -->
            <div class="flex items-center justify-center gap-4 py-3 overflow-x-auto scrollbar-hide border-t border-green-300/30">
                <a href="/categories/hospital" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Hospital Equipment</a>
                <a href="/categories/clinic" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Clinic Essentials</a>
                <a href="/categories/dental" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Dental Equipment</a>
                <a href="/categories/pharmaceuticals" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Pharmaceuticals</a>
                <a href="/categories/diagnostic" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Diagnostic Equipment</a>
                <a href="/categories/surgical" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Surgical Instruments</a>
                <a href="/categories/laboratory" class="bg-gradient-to-r from-green-600/30 to-green-500/30 backdrop-blur-sm border border-green-300/50 rounded-lg px-4 py-2 text-sm text-green-800 hover:text-green-900 hover:from-green-600/40 hover:to-green-500/40 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300">Laboratory Equipment</a>
            </div>
        </div>

        <!-- Mobile Layout -->
        <div class="md:hidden">
            <!-- Row 1: Logo and Account/Cart -->
            <div class="flex items-center justify-between mb-3">
                <a href="/" class="text-xl font-bold luxury-gradient-text hover:scale-105 transition-all duration-300 heartbeat-animation">D Care</a>
                <div class="flex items-center gap-4">
                    <button class="text-purple-200 hover:text-purple-100 hover:scale-105 transition-all duration-300 float-animation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </button>
                    <button class="text-purple-200 hover:text-purple-100 hover:scale-105 transition-all duration-300 relative pulse-glow-animation">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-gradient-to-r from-pink-500 to-purple-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center heartbeat-animation">0</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 2: Search Bar -->
            <div class="relative mb-3">
                <input type="text" placeholder="Search for medical equipment, instruments, supplies..." 
                       class="w-full px-4 py-2 pr-12 border border-purple-300/50 rounded-lg focus:outline-none focus:border-purple-400 bg-white/20 backdrop-blur-sm text-white placeholder-purple-200 shimmer-effect">
                <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-gradient-to-r from-purple-500 to-pink-500 text-white p-2 rounded-md hover:from-purple-600 hover:to-pink-600 pulse-glow-animation">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
            
            <!-- Row 3: Categories -->
            <div class="flex items-center gap-4 py-3 overflow-x-auto scrollbar-hide border-t border-purple-300/30">
                <a href="/categories/hospital" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Hospital</a>
                <a href="/categories/clinic" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Clinic</a>
                <a href="/categories/dental" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Dental</a>
                <a href="/categories/pharmaceuticals" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Pharmaceuticals</a>
                <a href="/categories/diagnostic" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Diagnostic Equipment</a>
                <a href="/categories/surgical" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Surgical Instruments</a>
                <a href="/categories/laboratory" class="bg-gradient-to-r from-purple-500/20 to-pink-500/20 backdrop-blur-sm border border-purple-300/40 rounded-lg px-4 py-2 text-sm text-purple-100 hover:text-white hover:from-purple-500/30 hover:to-pink-500/30 hover:scale-105 whitespace-nowrap font-medium shadow-lg transition-all duration-300 float-animation">Laboratory Equipment</a>
            </div>
        </div>
    </div>
</nav>