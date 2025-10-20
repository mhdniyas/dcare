@extends('layouts.app')

@section('title', 'D Care Pharmaceuticals - Future of Healthcare')

@section('content')
<!-- Categories Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 gradient-text">Our Categories</h2>
            <p class="text-xl text-gray-300">Explore our comprehensive range of medical solutions</p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8">
            <a href="/hospital-products" class="group">
                <div class="glass rounded-2xl overflow-hidden card-hover">
                    <div class="h-48 relative">
                        @if(file_exists(public_path('images/hospital.jpg')))
                            <img src="{{ asset('images/hospital.jpg') }}" alt="Hospital Products" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-blue-500/30 to-cyan-500/30 flex items-center justify-center">
                                <svg class="w-20 h-20 text-blue-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-cyan-400 transition-colors">Hospital Products</h3>
                        <p class="text-gray-300 mb-4">Advanced equipment and supplies for hospitals</p>
                        <div class="flex items-center text-cyan-400">
                            <span>Explore Products</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/clinic-products" class="group">
                <div class="glass rounded-2xl overflow-hidden card-hover">
                    <div class="h-48 relative">
                        @if(file_exists(public_path('images/clinic.jpg')))
                            <img src="{{ asset('images/clinic.jpg') }}" alt="Clinic Products" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-purple-500/30 to-pink-500/30 flex items-center justify-center">
                                <svg class="w-20 h-20 text-purple-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-cyan-400 transition-colors">Clinic Products</h3>
                        <p class="text-gray-300 mb-4">Essential tools for medical clinics</p>
                        <div class="flex items-center text-cyan-400">
                            <span>Explore Products</span>
                            <svg class="w-4 h-4 ml-2 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </a>
            
            <a href="/dental-clinic-products" class="group">
                <div class="glass rounded-2xl overflow-hidden card-hover">
                    <div class="h-48 relative">
                        @if(file_exists(public_path('images/dental.jpg')))
                            <img src="{{ asset('images/dental.jpg') }}" alt="Dental Products" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-300">
                        @else
                            <div class="w-full h-full bg-gradient-to-br from-green-500/30 to-teal-500/30 flex items-center justify-center">
                                <svg class="w-20 h-20 text-green-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1.5a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5H9m0-5a1.5 1.5 0 011.5-1.5H12a1.5 1.5 0 011.5 1.5v1a1.5 1.5 0 01-1.5 1.5H9.5A1.5 1.5 0 018 11.5V10z"/>
                                </svg>
                            </div>
                        @endif
                        <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold mb-2 group-hover:text-cyan-400 transition-colors">Dental Products</h3>
                        <p class="text-gray-300 mb-4">Specialized dental equipment and supplies</p>
                        <div class="flex items-center text-cyan-400">
                            <span>Explore Products</span>
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

<!-- Featured Products -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold mb-4 gradient-text">Top Offers</h2>
            <p class="text-xl text-gray-300">Best deals on premium medical equipment</p>
        </div>
        
        <div class="grid md:grid-cols-4 gap-6">
            <x-product-card name="Digital Stethoscope" price="15000" category="Hospital" />
            <x-product-card name="Blood Pressure Monitor" price="8500" category="Clinic" />
            <x-product-card name="Dental X-Ray Unit" price="125000" category="Dental" />
            <x-product-card name="Surgical Instruments Set" price="25000" category="Hospital" />
        </div>
    </div>
</section>
@endsection
