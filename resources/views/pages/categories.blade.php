@extends('layouts.app')

@section('title', 'Categories - D Care')
@section('description', 'Browse our comprehensive range of medical equipment categories including hospital, dental, and clinic equipment.')

@section('content')
<div class="min-h-screen bg-gray-50">
    <!-- Header -->
    <div class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-gray-900">Product Categories</h1>
            <p class="text-gray-600 mt-2">Browse our comprehensive range of medical equipment categories</p>
        </div>
    </div>

    <!-- Main Categories -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid md:grid-cols-3 gap-6">
            <!-- Hospital Equipment -->
            <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                <!-- Gradient Glow Effect on Hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-teal-600 group-hover:text-teal-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">Hospital Equipment</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Complete range of hospital equipment and medical devices for healthcare facilities</p>
                    <a href="{{ route('categories.hospital') }}" class="inline-flex items-center bg-gradient-to-r from-teal-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg hover:shadow-teal-500/50 hover:scale-105 transition-all duration-300 group/btn">
                        View Products
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Neon Glow Border on Hover -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
            </div>

            <!-- Dental Equipment -->
            <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                <!-- Gradient Glow Effect on Hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-teal-600 group-hover:text-teal-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">Dental Equipment</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Professional dental instruments and equipment for modern dental practices</p>
                    <a href="{{ route('categories.dental') }}" class="inline-flex items-center bg-gradient-to-r from-teal-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg hover:shadow-teal-500/50 hover:scale-105 transition-all duration-300 group/btn">
                        View Products
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Neon Glow Border on Hover -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
            </div>

            <!-- Clinic Equipment -->
            <div class="group relative bg-gradient-to-br from-white/90 to-gray-50/90 backdrop-blur-sm rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 overflow-hidden border border-gray-100/50 hover:border-teal-200/50">
                <!-- Gradient Glow Effect on Hover -->
                <div class="absolute inset-0 bg-gradient-to-br from-teal-400/0 via-cyan-500/0 to-blue-600/0 group-hover:from-teal-400/5 group-hover:via-cyan-500/5 group-hover:to-blue-600/5 transition-all duration-500 rounded-2xl"></div>
                
                <div class="relative p-8">
                    <div class="w-16 h-16 bg-gradient-to-br from-teal-100 to-cyan-100 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
                        <svg class="w-8 h-8 text-teal-600 group-hover:text-teal-700 transition-colors" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-transparent group-hover:bg-clip-text group-hover:bg-gradient-to-r group-hover:from-teal-600 group-hover:to-blue-600 transition-all duration-300">Clinic Equipment</h3>
                    <p class="text-gray-600 mb-6 leading-relaxed">Essential equipment for clinics and medical practices</p>
                    <a href="{{ route('categories.clinic') }}" class="inline-flex items-center bg-gradient-to-r from-teal-500 to-blue-600 text-white px-6 py-3 rounded-xl font-semibold hover:shadow-lg hover:shadow-teal-500/50 hover:scale-105 transition-all duration-300 group/btn">
                        View Products
                        <svg class="w-5 h-5 ml-2 group-hover/btn:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                        </svg>
                    </a>
                </div>
                
                <!-- Neon Glow Border on Hover -->
                <div class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-500 pointer-events-none" style="box-shadow: 0 0 30px rgba(20, 184, 166, 0.3);"></div>
            </div>
        </div>
    </div>
</div>
@endsection