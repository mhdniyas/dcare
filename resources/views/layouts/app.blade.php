<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>@yield('title', 'D Care Pharmaceuticals')</title>
    <meta name="description" content="@yield('description', 'D Care offers over 20,000+ medical products including dental equipment, surgical instruments, pharmaceuticals, and diagnostic equipment.')">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    @stack('styles')
</head>
<body class="bg-white text-gray-900 antialiased">
    @include('components.dcare-header')
    
    <main class="pb-16 md:pb-0">
        @yield('content')
    </main>
    
    @include('components.dcare-footer')
    @include('components.dcare-cart-sidebar')
    @include('components.dcare-sidebar')
    @include('components.dcare-bottom-nav')
    
    @stack('scripts')
</body>
</html>