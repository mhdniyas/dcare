@extends('layouts.app')

@section('title', 'Contact Us - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h1 class="text-5xl font-bold mb-4 gradient-text">Contact Us</h1>
            <p class="text-xl text-gray-300">Get in touch with our team for any inquiries or support</p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12">
            <!-- Contact Form -->
            <div class="glass rounded-2xl p-8">
                <h2 class="text-2xl font-bold mb-6 text-cyan-400">Send us a Message</h2>
                <form class="space-y-6">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium mb-2">First Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors" placeholder="John">
                        </div>
                        <div>
                            <label class="block text-sm font-medium mb-2">Last Name</label>
                            <input type="text" class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors" placeholder="Doe">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Email</label>
                        <input type="email" class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors" placeholder="john@example.com">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Phone</label>
                        <input type="tel" class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors" placeholder="+91 98765 43210">
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Subject</label>
                        <select class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors">
                            <option>General Inquiry</option>
                            <option>Product Support</option>
                            <option>Sales</option>
                            <option>Partnership</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium mb-2">Message</label>
                        <textarea rows="4" class="w-full px-4 py-3 rounded-lg glass border border-white/20 focus:border-cyan-400 focus:outline-none transition-colors" placeholder="Your message here..."></textarea>
                    </div>
                    <button type="submit" class="w-full bg-gradient-to-r from-blue-500 to-cyan-400 text-white py-3 rounded-lg font-semibold hover:shadow-lg hover:shadow-blue-500/25 transition-all duration-300">
                        Send Message
                    </button>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="space-y-8">
                <div class="glass rounded-2xl p-8">
                    <h2 class="text-2xl font-bold mb-6 text-cyan-400">Get in Touch</h2>
                    <div class="space-y-6">
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-blue-500 to-cyan-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Address</h3>
                                <p class="text-gray-300">123 Healthcare Plaza<br>Mumbai, Maharashtra 400001<br>India</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-purple-500 to-pink-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Phone</h3>
                                <p class="text-gray-300">+91 98765 43210<br>+91 98765 43211</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start space-x-4">
                            <div class="w-12 h-12 bg-gradient-to-r from-green-500 to-teal-400 rounded-lg flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 4.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Email</h3>
                                <p class="text-gray-300">info@dcare.com<br>support@dcare.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="glass rounded-2xl p-8">
                    <h3 class="text-xl font-bold mb-4 text-cyan-400">Business Hours</h3>
                    <div class="space-y-2 text-gray-300">
                        <div class="flex justify-between">
                            <span>Monday - Friday</span>
                            <span>9:00 AM - 6:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Saturday</span>
                            <span>9:00 AM - 2:00 PM</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Sunday</span>
                            <span>Closed</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection