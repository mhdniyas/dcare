<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'D Care Pharmaceuticals')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-50 text-gray-900 min-h-screen">
    <!-- Subtle Background Pattern -->
    <div class="fixed inset-0 overflow-hidden pointer-events-none opacity-30">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-gray-200 rounded-full blur-3xl"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-gray-100 rounded-full blur-3xl"></div>
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