@extends('layouts.app')

@section('title', 'Categories - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 gradient-text">Product Categories</h1>
            <p class="text-xl text-gray-300">Discover our complete range of medical solutions</p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="/hospital-products" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-48 relative">
                        <img src="{{ asset('images/hospital.jpg') }}" alt="Hospital Products" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">Hospital Products</h3>
                        <p class="text-gray-600 mb-4">Advanced medical equipment for hospitals and large healthcare facilities</p>
                        <div class="flex items-center text-blue-600">
                            <span>Explore Products</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/clinic-products" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-48 relative">
                        <img src="{{ asset('images/clinic.jpg') }}" alt="Clinic Products" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">Clinic Products</h3>
                        <p class="text-gray-600 mb-4">Essential medical tools and equipment for clinics and small practices</p>
                        <div class="flex items-center text-blue-600">
                            <span>Explore Products</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/dental-clinic-products" class="group">
                <div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300">
                    <div class="h-48 relative">
                        <img src="{{ asset('images/dental.jpg') }}" alt="Dental Products" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                        <div class="absolute inset-0 bg-black/20"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 text-gray-800 group-hover:text-blue-600 transition-colors">Dental Products</h3>
                        <p class="text-gray-600 mb-4">Specialized dental equipment and supplies for dental practices</p>
                        <div class="flex items-center text-blue-600">
                            <span>Explore Products</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/marketplace" class="group">
                <div class="glass rounded-2xl overflow-hidden card-hover">
                    <div class="h-48 bg-gradient-to-br from-orange-500/30 to-red-500/30 flex items-center justify-center">
                        <svg class="w-20 h-20 text-orange-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z"/>
                        </svg>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-cyan-400 transition-colors">Marketplace</h3>
                        <p class="text-gray-300 mb-4">Browse all products across categories in our comprehensive marketplace</p>
                        <div class="flex items-center text-cyan-400">
                            <span>Browse All</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</section>
@endsection
