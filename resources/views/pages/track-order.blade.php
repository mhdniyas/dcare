@extends('layouts.app')

@section('title', 'Track Your Order - D Care Pharmaceuticals')
@section('description', 'Track your medical equipment order status and delivery information.')

@section('content')
<div class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-900 mb-4">Track Your Order</h1>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Enter your order ID to track your medical equipment delivery</p>
        </div>
        
        <div class="max-w-md mx-auto">
            <div class="bg-white rounded-xl shadow-soft p-8">
                <form class="space-y-6">
                    <div>
                        <label for="order-id" class="block text-sm font-medium text-gray-700 mb-2">Order ID</label>
                        <input type="text" id="order-id" placeholder="Enter your order ID" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200">
                    </div>
                    <button type="submit" class="w-full bg-primary-600 text-white py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors">
                        Track Order
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection