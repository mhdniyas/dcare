<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'D Care Pharmaceuticals')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="porsche-olive-theme text-green-800 min-h-screen">
        <!-- Floating Medical Icons -->
        <div class="fixed inset-0 overflow-hidden pointer-events-none z-0">
            <!-- Medical Cross -->
            <div class="floating-medical-icon" style="top: 10%; left: 10%;">
                <svg class="w-16 h-16 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
            </div>
            <!-- Heartbeat -->
            <div class="floating-medical-icon heartbeat-animation" style="top: 20%; right: 15%;">
                <svg class="w-12 h-12 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
                </svg>
            </div>
            <!-- Stethoscope -->
            <div class="floating-medical-icon float-animation" style="top: 60%; left: 5%;">
                <svg class="w-14 h-14 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 14v3c0 1.1-.9 2-2 2s-2-.9-2-2v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 2.21-1.79 4-4 4s-4-1.79-4-4v-3c0-1.1-.9-2-2-2s-2 .9-2 2v3c0 3.31 2.69 6 6 6s6-2.69 6-6v-3c0-1.1-.9-2-2-2s-2 .9-2 2z"/>
                </svg>
            </div>
            <!-- Medical Plus -->
            <div class="floating-medical-icon medical-pulse-animation" style="top: 30%; right: 5%;">
                <svg class="w-10 h-10 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z"/>
                </svg>
            </div>
            <!-- Pill -->
            <div class="floating-medical-icon float-animation" style="bottom: 20%; right: 20%;">
                <svg class="w-12 h-12 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                </svg>
            </div>
            <!-- Shield -->
            <div class="floating-medical-icon pulse-glow-animation" style="bottom: 10%; left: 20%;">
                <svg class="w-16 h-16 text-white/20" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M12,1L3,5V11C3,16.55 6.84,21.74 12,23C17.16,21.74 21,16.55 21,11V5L12,1M12,7C13.4,7 14.8,8.6 14.8,10V11H16V16H8V11H9.2V10C9.2,8.6 10.6,7 12,7M12,8.2C11.2,8.2 10.4,8.7 10.4,10V11H13.6V10C13.6,8.7 12.8,8.2 12,8.2Z"/>
                </svg>
            </div>
        </div>

    <!-- Header -->
    @include('layouts.header')

    <!-- Hero Section -->
    @if(!request()->is('product', 'about-us', 'contact-us'))
        @include('layouts.hero')
    @endif

    <!-- Main Content -->
    <main class="relative z-10">
        @yield('content')
    </main>

    <!-- Footer -->
    @include('layouts.footer')

    <!-- Mobile Navigation -->
    @include('layouts.mobile-nav')
</body>
</html>