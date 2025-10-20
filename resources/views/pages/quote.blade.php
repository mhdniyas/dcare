@extends('layouts.app')

@section('title', 'Get Quote - D Care Pharmaceuticals')

@section('content')
<section class="py-16">
    <div class="container mx-auto px-4 max-w-2xl">
        <div class="text-center mb-12">
            <h1 class="text-5xl font-bold mb-4 text-gray-800">Get Quote</h1>
            <p class="text-xl text-gray-600">Request a quote for your medical equipment needs</p>
        </div>
        
        <div class="bg-white rounded-3xl p-8 shadow-[0_8px_30px_rgb(0,0,0,0.12)]">
            <form x-data="{
                category: '',
                products: {
                    hospital: ['Digital Stethoscope', 'ECG Machine', 'Defibrillator', 'MRI Scanner', 'Ventilator'],
                    clinic: ['Blood Pressure Monitor', 'Ultrasound Scanner', 'Pulse Oximeter', 'Thermometer', 'Nebulizer'],
                    dental: ['Dental X-Ray Unit', 'Dental Chair', 'Dental Drill', 'Dental Compressor', 'Dental Autoclave']
                }
            }" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-700">First Name</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" required>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-700">Last Name</label>
                        <input type="text" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" required>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Email</label>
                    <input type="email" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" required>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Phone</label>
                    <input type="tel" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" required>
                </div>
                
                <div x-data="{ open: false, selected: '' }">
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Category</label>
                    <div class="relative">
                        <button @click="open = !open" type="button" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors text-left flex justify-between items-center">
                            <span x-text="selected || 'Select Category'" :class="selected ? 'text-gray-900' : 'text-gray-500'"></span>
                            <svg class="w-5 h-5 text-gray-400" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute z-10 w-full mt-1 bg-white border border-gray-200 rounded-xl shadow-lg">
                            <div @click="selected = 'Hospital Products'; category = 'hospital'; open = false" class="px-4 py-3 hover:bg-gray-50 cursor-pointer">Hospital Products</div>
                            <div @click="selected = 'Clinic Products'; category = 'clinic'; open = false" class="px-4 py-3 hover:bg-gray-50 cursor-pointer">Clinic Products</div>
                            <div @click="selected = 'Dental Products'; category = 'dental'; open = false" class="px-4 py-3 hover:bg-gray-50 cursor-pointer rounded-b-xl">Dental Products</div>
                        </div>
                    </div>
                </div>
                
                <div x-show="category" x-transition x-data="{ open: false, selected: '' }">
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Product</label>
                    <div class="relative">
                        <button @click="open = !open" type="button" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors text-left flex justify-between items-center">
                            <span x-text="selected || 'Select Product'" :class="selected ? 'text-gray-900' : 'text-gray-500'"></span>
                            <svg class="w-5 h-5 text-gray-400" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
                            </svg>
                        </button>
                        <div x-show="open" @click.away="open = false" x-transition class="absolute z-10 w-full mt-1 bg-white border border-gray-200 rounded-xl shadow-lg max-h-48 overflow-y-auto">
                            <template x-for="product in products[category]" :key="product">
                                <div @click="selected = product; open = false" class="px-4 py-3 hover:bg-gray-50 cursor-pointer" x-text="product"></div>
                            </template>
                        </div>
                    </div>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Quantity</label>
                    <input type="number" min="1" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" required>
                </div>
                
                <div>
                    <label class="block text-sm font-semibold mb-2 text-gray-700">Additional Requirements</label>
                    <textarea rows="4" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-blue-500 focus:outline-none transition-colors" placeholder="Any specific requirements or questions..."></textarea>
                </div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-cyan-600 text-white py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-cyan-700 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5">
                    Request Quote
                </button>
            </form>
        </div>
    </div>
</section>
@endsection