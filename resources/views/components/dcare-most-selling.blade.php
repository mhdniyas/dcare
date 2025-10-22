<!-- D Care Most Selling Products -->
<section class="py-3 md:py-6 bg-white" x-data="mostSellingProducts()">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="flex items-center justify-between mb-2 md:mb-4 relative">
            <div class="flex items-center gap-2">
                <h2 class="text-lg md:text-xl font-semibold text-[#205375] relative z-10">Hot Selling</h2>
            </div>
            <div class="flex items-center gap-2">
                <span class="hidden md:block text-sm text-[#205375] hover:text-[#f24207] font-medium cursor-pointer">View All</span>
                <svg class="hidden md:block" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 24 25">
                    <path fill="#205375" fill-rule="evenodd" d="M12.414 12.794l-.707-.707-6-6a1 1 0 00-1.414 1.414l5.293 5.293-5.293 5.293a1 1 0 101.414 1.414l6-6 .707-.707z" clip-rule="evenodd"/>
                    <path stroke="#205375" stroke-linecap="round" stroke-width="2" d="M13 6.794l6 6-6 6"/>
                </svg>
                <svg class="md:hidden" width="20" height="20" viewBox="0 0 24 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8901 14.4172C11.969 14.1447 11.969 13.8554 11.8901 13.5828C11.8302 13.376 11.7311 13.2202 11.6534 13.1135C11.5875 13.023 11.5064 12.9276 11.4401 12.8497L5.91619 6.35229C5.55846 5.93152 4.92736 5.88042 4.50659 6.23815C4.08582 6.59588 4.03471 7.22697 4.39244 7.64775L9.79298 14L4.39244 20.3523C4.03471 20.7731 4.08582 21.4042 4.50659 21.7619C4.92736 22.1196 5.55846 22.0685 5.91619 21.6477L11.4269 15.1659C11.4312 15.1608 11.4356 15.1557 11.4401 15.1504C11.5064 15.0725 11.5875 14.9771 11.6534 14.8866C11.7311 14.7798 11.8302 14.6241 11.8901 14.4172Z" fill="#BABDC3"/>
                    <path d="M13.0898 7L18.6005 13.4818C18.7569 13.6659 18.8352 13.7579 18.865 13.8609C18.8913 13.9518 18.8913 14.0482 18.865 14.1391C18.8352 14.2421 18.7569 14.3341 18.6005 14.5182L13.0898 21" stroke="#205375" stroke-width="2" stroke-linecap="round"/>
                </svg>
            </div>
        </div>
        
        <!-- Product Grid -->
        <div class="overflow-x-auto">
            <div class="flex gap-3 pb-2" style="width: max-content;">
                <template x-for="product in products" :key="product.id">
                    <div class="min-w-0 flex-none w-[148px] h-[268px] flex flex-col">
                        <div class="flex flex-col h-full">
                            <!-- Product Image -->
                            <div class="relative flex justify-center items-center w-[148px] h-[134px] rounded-lg p-3 border border-gray-200 bg-white">
                                <a class="aspect-square flex items-center justify-center" href="#">
                                    <img :src="product.image" :alt="product.name" class="w-full h-full object-contain">
                                </a>
                                <div class="flex justify-center absolute -bottom-1.5 right-0">
                                    <button class="relative border border-[#205375] text-[#205375] bg-white flex items-center justify-center text-xs uppercase rounded-md min-h-6 transition-all duration-300 font-medium flex-col overflow-hidden">
                                        <span class="w-12 text-[10px]">Add</span>
                                        <span class="bg-[#D7E7FA] text-[7px] text-[#205375] capitalize w-12" x-text="product.options + ' Options'"></span>
                                    </button>
                                </div>
                            </div>
                            
                            <!-- Product Content -->
                            <div class="flex flex-col flex-1 mt-1.5 justify-between">
                                <div class="flex flex-col">
                                    <!-- Rating -->
                                    <div class="flex items-center mb-1">
                                        <div class="flex items-center bg-green-700 text-white px-1 py-0.5 rounded text-xs">
                                            <span class="text-[10px] font-medium" x-text="'★ ' + product.rating"></span>
                                        </div>
                                        <span class="text-gray-500 ml-1 text-[10px]" x-text="'(' + product.reviews + ')'"></span>
                                    </div>
                                    
                                    <!-- Product Name - Fixed Height -->
                                    <div class="h-6 mb-1">
                                        <span class="line-clamp-2 overflow-hidden text-ellipsis hover:underline text-[10px] font-medium text-[#205375] leading-3" x-text="product.name"></span>
                                    </div>
                                    
                                    <!-- Description - Fixed Height -->
                                    <div class="h-6 mb-1.5">
                                        <span class="line-clamp-2 overflow-hidden text-ellipsis text-gray-800 text-[10px] font-normal leading-3" x-text="product.description"></span>
                                    </div>
                                    
                                    <!-- Price -->
                                    <div class="mb-1.5">
                                        <div class="flex items-center">
                                            <span class="text-sm font-semibold text-[#205375]" x-text="'₹ ' + product.price.toLocaleString()"></span>
                                            <span x-show="product.originalPrice" class="text-xs ml-1 line-through text-[10px] text-gray-500 font-medium" x-text="'₹ ' + product.originalPrice?.toLocaleString()"></span>
                                        </div>
                                    </div>
                                    
                                    <!-- Discount & Coins -->
                                    <div class="h-4 mb-1.5">
                                        <div class="flex items-center gap-1.5" x-show="product.discount">
                                            <div class="flex items-center">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="10" height="10" viewBox="0 0 13 13" fill="none">
                                                    <path d="M6.17583 10.0642C6.11289 10.0182 6.05843 9.96258 6.01177 9.90015L2.74126 6.62964C2.43663 6.32499 2.43663 5.83077 2.74126 5.52612C3.04591 5.22147 3.54012 5.22149 3.84478 5.52612L5.85454 7.53589L5.85454 1.8894C5.85481 1.45879 6.20415 1.11013 6.63482 1.11011C7.06551 1.11011 7.41483 1.45878 7.41509 1.8894L7.41509 7.55933L9.44829 5.52612L9.50786 5.47241C9.81426 5.22272 10.2663 5.24061 10.5518 5.52612C10.8373 5.81166 10.8552 6.26366 10.6055 6.57007L10.5518 6.62964L6.64653 10.5349L6.17583 10.0642Z" fill="#2483B9"/>
                                                </svg>
                                                <div class="text-[10px] font-bold text-[#2483B9]" x-text="product.discount + '% Off'"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Bottom Button - Always at bottom -->
                                <div class="mt-auto">
                                    <div class="flex items-center rounded bg-[#CCF5DF] w-full px-2 py-1 text-[#0B5733] text-[10px] font-medium capitalize justify-between cursor-pointer">
                                        View Similar Products
                                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="w-3 h-3">
                                            <path d="m9 18 6-6-6-6"/>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>
</section>

<script>
function mostSellingProducts() {
    return {
        products: [
            {
                id: 1,
                name: 'Labodent DieRock Die Stone Type 4',
                description: 'High-strength Type IV die stone for precise implant and CAD/CAM models',
                image: '{{ asset("images/brands/1.jpg") }}',
                price: 349,
                options: 2,
                rating: 4.2,
                reviews: 18,
                discount: null,
                coins: null
            },
            {
                id: 2,
                name: 'Waldent PearlSuction UltraSoft Saliva Ejectors',
                description: 'Disposable Suction Tips provide efficient oral fluid removal and comfort',
                image: '{{ asset("images/brands/12.jpg") }}',
                price: 197,
                originalPrice: 650,
                options: 2,
                rating: 4.7,
                reviews: 32,
                discount: 69.69,
                coins: 10
            },
            {
                id: 3,
                name: 'Dentsply Dycal',
                description: 'Radiopaque Calcium Hydroxide Composition',
                image: '{{ asset("images/brands/123.jpg") }}',
                price: 1401,
                originalPrice: 2660,
                options: null,
                rating: 5.0,
                reviews: 4,
                discount: 47.33,
                coins: 15
            },
            {
                id: 4,
                name: 'Dpi Photosil Soft Putty & Light Body',
                description: 'Soft Putty and Light Body Versatile dental impression material',
                image: '{{ asset("images/dental.jpg") }}',
                price: 782,
                options: 7,
                rating: 4.6,
                reviews: 5,
                discount: null,
                coins: null
            },
            {
                id: 5,
                name: 'Ivoclar Tetric N-Bond Universal',
                description: 'Universal, single-component light-curing adhesive for dental bonding',
                image: '{{ asset("images/brands/1.jpg") }}',
                price: 2058,
                options: 3,
                rating: 4.3,
                reviews: 12,
                discount: null,
                coins: null
            },
            {
                id: 6,
                name: 'Myora Cordless Water Flossers',
                description: 'Cordless water flosser with 3 modes, rechargeable, safe, and travel-friendly',
                image: '{{ asset("images/brands/12.jpg") }}',
                price: 2437,
                options: 2,
                rating: 4.8,
                reviews: 24,
                discount: null,
                coins: null
            }
        ]
    }
}
</script>