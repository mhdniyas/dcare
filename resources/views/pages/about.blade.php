@extends('layouts.app')

@section('title', 'About Us - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold mb-4 gradient-text">About D Care</h1>
            <p class="text-xl text-gray-300 max-w-3xl mx-auto">Leading the future of healthcare with innovative pharmaceutical solutions and cutting-edge medical technology</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 items-center mb-16">
            <div class="space-y-6">
                <h2 class="text-3xl font-bold text-cyan-400">Our Mission</h2>
                <p class="text-gray-300 leading-relaxed">
                    At D Care Pharmaceuticals, we are committed to revolutionizing healthcare through innovative medical solutions. 
                    Our mission is to provide healthcare professionals with the most advanced, reliable, and efficient medical equipment 
                    and pharmaceutical products to enhance patient care and improve health outcomes.
                </p>
                <p class="text-gray-300 leading-relaxed">
                    We believe in the power of technology to transform healthcare, making it more accessible, accurate, and effective 
                    for both healthcare providers and patients worldwide.
                </p>
            </div>
            <div class="glass rounded-2xl p-8 text-center">
                <div class="w-24 h-24 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-2xl mx-auto mb-6 flex items-center justify-center">
                    <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold mb-4">Innovation First</h3>
                <p class="text-gray-300">Pioneering the next generation of medical technology</p>
            </div>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="glass rounded-2xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-purple-500 to-pink-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-purple-400">Quality Assured</h3>
                <p class="text-gray-300">All products meet international quality standards</p>
            </div>
            
            <div class="glass rounded-2xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-green-500 to-teal-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-green-400">24/7 Support</h3>
                <p class="text-gray-300">Round-the-clock customer service and technical support</p>
            </div>
            
            <div class="glass rounded-2xl p-8 text-center card-hover">
                <div class="w-16 h-16 bg-gradient-to-r from-orange-500 to-red-400 rounded-xl mx-auto mb-4 flex items-center justify-center">
                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>
                </div>
                <h3 class="text-xl font-bold mb-2 text-orange-400">Global Reach</h3>
                <p class="text-gray-300">Serving healthcare providers worldwide</p>
            </div>
        </div>
        
        <div class="glass rounded-2xl p-8">
            <h2 class="text-3xl font-bold mb-6 text-center gradient-text">Our Values</h2>
            <div class="grid md:grid-cols-2 gap-8">
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-cyan-400">Excellence</h3>
                    <p class="text-gray-300">We strive for excellence in every product and service we deliver, ensuring the highest standards of quality and performance.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-cyan-400">Innovation</h3>
                    <p class="text-gray-300">Continuous innovation drives our development of cutting-edge medical solutions that address evolving healthcare needs.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-cyan-400">Integrity</h3>
                    <p class="text-gray-300">We conduct business with the highest ethical standards, building trust with our customers and partners.</p>
                </div>
                <div>
                    <h3 class="text-xl font-semibold mb-3 text-cyan-400">Care</h3>
                    <p class="text-gray-300">Patient care is at the heart of everything we do, driving our commitment to improving healthcare outcomes.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection