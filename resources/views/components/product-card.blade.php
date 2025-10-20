@props(['name', 'price', 'image' => null, 'category' => ''])

<div class="relative bg-gradient-to-br from-white to-gray-50 rounded-3xl p-6 shadow-[0_8px_30px_rgb(0,0,0,0.12)] hover:shadow-[0_20px_60px_rgb(0,0,0,0.15)] transition-all duration-500 group border border-gray-100 hover:border-blue-200 hover:-translate-y-2" data-category="{{ strtolower($category) }}">
    <!-- Offer Badge -->
    <div class="absolute -top-2 -right-2 bg-gradient-to-r from-red-500 to-pink-500 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg z-10">
        10% OFF
    </div>
    
    <div class="aspect-square rounded-2xl overflow-hidden mb-5 relative">
        <img src="{{ $image ?? asset('images/default.jpg') }}" alt="{{ $name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
        <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    </div>
    
    <div class="space-y-4">
        @if($category)
            <span class="text-xs px-3 py-1 bg-gradient-to-r from-blue-500 to-cyan-500 text-white rounded-full font-semibold shadow-sm">{{ $category }}</span>
        @endif
        <h3 class="text-lg font-bold text-gray-900 group-hover:text-blue-600 transition-colors leading-tight">{{ $name }}</h3>
        <div class="flex items-center space-x-2">
            <p class="text-sm text-gray-500 line-through">₹{{ number_format($price) }}</p>
            <p class="text-2xl font-extrabold bg-gradient-to-r from-blue-600 to-cyan-600 bg-clip-text text-transparent">₹{{ number_format($price * 0.9) }}</p>
        </div>
        <a href="/product" class="block w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-3 rounded-xl hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 text-center font-semibold shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
            View Details
        </a>
    </div>
</div>