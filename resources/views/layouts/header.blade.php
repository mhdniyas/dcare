<!-- Main Navigation -->
<nav class="bg-gray-800/95 backdrop-blur-sm shadow-md sticky top-0 z-50">
    <div class="container mx-auto px-4">
        <!-- Desktop Layout -->
        <div class="hidden md:block">
            <!-- Row 1: Logo, Search, Account/Cart -->
            <div class="flex items-center justify-between py-3">
                <a href="/" class="text-2xl font-bold text-blue-400 hover:text-blue-300 transition-colors">D Care</a>
                
                <!-- Search Bar -->
                <div class="flex-1 mx-8 max-w-2xl">
                    <div class="relative">
                        <input type="text" placeholder="Search for medical equipment, instruments, supplies..." 
                               class="w-full px-4 py-2 pr-12 border border-gray-500 rounded-lg focus:outline-none focus:border-blue-400 bg-gray-700 text-white placeholder-gray-300">
                        <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="flex items-center gap-4">
                    <button class="flex flex-col items-center text-gray-300 hover:text-blue-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                        <span class="text-xs">Account</span>
                    </button>
                    <button class="flex flex-col items-center text-gray-300 hover:text-blue-400 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="text-xs">Cart</span>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 2: Categories -->
            <div class="flex items-center justify-center gap-4 py-3 overflow-x-auto scrollbar-hide border-t border-gray-600">
                <a href="/categories/hospital" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Hospital Equipment</a>
                <a href="/categories/clinic" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Clinic Essentials</a>
                <a href="/categories/dental" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Dental Equipment</a>
                <a href="/categories/pharmaceuticals" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Pharmaceuticals</a>
                <a href="/categories/diagnostic" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Diagnostic Equipment</a>
                <a href="/categories/surgical" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Surgical Instruments</a>
                <a href="/categories/laboratory" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Laboratory Equipment</a>
            </div>
        </div>

        <!-- Mobile Layout -->
        <div class="md:hidden">
            <!-- Row 1: Logo and Account/Cart -->
            <div class="flex items-center justify-between mb-3">
                <a href="/" class="text-xl font-bold text-blue-400 hover:text-blue-300 transition-colors">D Care</a>
                <div class="flex items-center gap-4">
                    <button class="text-gray-300 hover:text-blue-400">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"/>
                        </svg>
                    </button>
                    <button class="text-gray-300 hover:text-blue-400 relative">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                        </svg>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
            
            <!-- Row 2: Search Bar -->
            <div class="relative mb-3">
                <input type="text" placeholder="Search for medical equipment, instruments, supplies..." 
                       class="w-full px-4 py-2 pr-12 border border-gray-500 rounded-lg focus:outline-none focus:border-blue-400 bg-gray-700 text-white placeholder-gray-300">
                <button class="absolute right-2 top-1/2 -translate-y-1/2 bg-blue-600 text-white p-2 rounded-md hover:bg-blue-700">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                    </svg>
                </button>
            </div>
            
            <!-- Row 3: Categories -->
            <div class="flex items-center gap-4 py-3 overflow-x-auto scrollbar-hide border-t border-gray-600">
                <a href="/categories/hospital" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Hospital</a>
                <a href="/categories/clinic" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Clinic</a>
                <a href="/categories/dental" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Dental</a>
                <a href="/categories/pharmaceuticals" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Pharmaceuticals</a>
                <a href="/categories/diagnostic" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Diagnostic Equipment</a>
                <a href="/categories/surgical" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Surgical Instruments</a>
                <a href="/categories/laboratory" class="bg-gray-700 border border-gray-500 rounded-md px-3 py-2 text-sm text-gray-300 hover:text-blue-400 hover:bg-gray-600 whitespace-nowrap font-medium shadow-sm transition-colors">Laboratory Equipment</a>
            </div>
        </div>
    </div>
</nav>