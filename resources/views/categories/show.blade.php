<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ ucfirst(str_replace('-', ' ', $slug)) }} - Categories - D Care</title>
    <meta name="description" content="Browse {{ str_replace('-', ' ', $slug) }} products and equipment.">
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-white text-gray-900 antialiased">
    @include('components.dcare-header')
    
    <main>
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-gray-900">{{ ucfirst(str_replace('-', ' ', $slug)) }}</h1>
            <p class="text-gray-600 mt-2">Browse products in this category</p>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-sm p-8 text-center">
            <div class="max-w-md mx-auto">
                <div class="w-16 h-16 bg-primary-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"/>
                    </svg>
                </div>
                <h2 class="text-xl font-semibold text-gray-900 mb-2">{{ ucfirst(str_replace('-', ' ', $slug)) }} Products</h2>
                <p class="text-gray-600 mb-6">Products for this category will be displayed here.</p>
                <a href="{{ route('categories.index') }}" class="inline-flex items-center px-4 py-2 bg-primary-600 text-white rounded-lg hover:bg-primary-700 transition-colors">
                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"/>
                    </svg>
                    Back to Categories
                </a>
            </div>
        </div>
    </div>
</div>
    </main>
    
    @include('components.dcare-footer')
    @include('components.dcare-cart-sidebar')
</body>
</html>