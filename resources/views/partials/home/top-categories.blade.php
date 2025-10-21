<!-- Top Categories Section -->
<section class="py-6 bg-gray-50">
    <div class="container mx-auto px-3">
        <div class="text-center mb-4">
            <h2 class="text-lg md:text-xl font-semibold text-gray-800">Top Categories</h2>
            <a href="/categories" class="text-blue-500 text-sm font-medium hover:text-blue-600 transition-colors">View All</a>
        </div>
        
        <!-- Top 3 Categories with Images -->
        <div class="flex justify-center space-x-4">
            <a href="/hospital-products" class="bg-white rounded-lg overflow-hidden w-32 text-center hover:shadow-lg focus:shadow-lg transition-all duration-300 group">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/hospital.jpg') }}" alt="Hospital Equipment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition-colors">Hospital Equipment</h3>
                </div>
            </a>
            
            <a href="/clinic-products" class="bg-white rounded-lg overflow-hidden w-32 text-center hover:shadow-lg focus:shadow-lg transition-all duration-300 group">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/clinic.jpg') }}" alt="Clinic Essentials" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition-colors">Clinic Essentials</h3>
                </div>
            </a>
            
            <a href="/dental-clinic-products" class="bg-white rounded-lg overflow-hidden w-32 text-center hover:shadow-lg focus:shadow-lg transition-all duration-300 group">
                <div class="aspect-square overflow-hidden">
                    <img src="{{ asset('images/dental.jpg') }}" alt="Dental Equipment" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                </div>
                <div class="p-3">
                    <h3 class="text-sm font-medium text-gray-800 group-hover:text-blue-600 transition-colors">Dental Equipment</h3>
                </div>
            </a>
        </div>
    </div>
</section>