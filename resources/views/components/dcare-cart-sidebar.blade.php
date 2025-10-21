<!-- D Care Cart Sidebar -->
<div 
    x-data="cartSidebar()"
    x-show="isOpen"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0"
    x-transition:enter-end="opacity-100"
    x-transition:leave="transition ease-in duration-200"
    x-transition:leave-start="opacity-100"
    x-transition:leave-end="opacity-0"
    class="fixed inset-0 bg-black bg-opacity-50 z-50"
    @click="closeCart()"
    @toggle-cart.window="toggleCart()"
>
    <div 
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="transform translate-x-full"
        x-transition:enter-end="transform translate-x-0"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-start="transform translate-x-0"
        x-transition:leave-end="transform translate-x-full"
        class="fixed right-0 top-0 h-full w-full max-w-md bg-white shadow-xl overflow-y-auto"
        @click.stop
    >
        <!-- Cart Header -->
        <div class="sticky top-0 bg-white border-b border-gray-200 p-6 z-10">
            <div class="flex items-center justify-between">
                <h2 class="text-xl font-bold text-gray-900">Shopping Cart</h2>
                <button 
                    @click="closeCart()"
                    class="text-gray-500 hover:text-gray-700 transition-colors"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            
            <!-- Cart Summary -->
            <div class="mt-4 flex items-center justify-between text-sm text-gray-600">
                <span x-text="`${cartItems.length} item${cartItems.length !== 1 ? 's' : ''}`"></span>
                <span class="font-semibold text-gray-900" x-text="`₹${total.toLocaleString()}`"></span>
            </div>
        </div>
        
        <!-- Cart Items -->
        <div class="p-6">
            <!-- Empty Cart State -->
            <div x-show="cartItems.length === 0" class="text-center py-12">
                <div class="w-24 h-24 mx-auto mb-4 bg-gray-100 rounded-full flex items-center justify-center">
                    <svg class="w-12 h-12 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-lg font-medium text-gray-900 mb-2">Your cart is empty</h3>
                <p class="text-gray-500 mb-6">Add some products to get started</p>
                <button 
                    @click="closeCart()"
                    class="bg-primary-600 text-white px-6 py-3 rounded-lg font-medium hover:bg-primary-700 transition-colors"
                >
                    Continue Shopping
                </button>
            </div>
            
            <!-- Cart Items List -->
            <div x-show="cartItems.length > 0" class="space-y-4">
                <template x-for="item in cartItems" :key="item.id">
                    <div class="flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
                        <!-- Product Image -->
                        <div class="w-16 h-16 bg-white rounded-lg overflow-hidden flex-shrink-0">
                            <img :src="item.image" :alt="item.name" class="w-full h-full object-cover">
                        </div>
                        
                        <!-- Product Details -->
                        <div class="flex-1 min-w-0">
                            <h4 class="font-medium text-gray-900 truncate" x-text="item.name"></h4>
                            <p class="text-sm text-gray-500" x-text="item.brand"></p>
                            <div class="flex items-center justify-between mt-2">
                                <span class="font-semibold text-primary-600" x-text="`₹${item.price.toLocaleString()}`"></span>
                                
                                <!-- Quantity Controls -->
                                <div class="flex items-center space-x-2">
                                    <button 
                                        @click="updateQuantity(item.id, item.quantity - 1)"
                                        class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-colors"
                                        :disabled="item.quantity <= 1"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                                        </svg>
                                    </button>
                                    <span class="w-8 text-center font-medium" x-text="item.quantity"></span>
                                    <button 
                                        @click="updateQuantity(item.id, item.quantity + 1)"
                                        class="w-8 h-8 bg-gray-200 rounded-full flex items-center justify-center hover:bg-gray-300 transition-colors"
                                    >
                                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Remove Button -->
                        <button 
                            @click="removeItem(item.id)"
                            class="text-gray-400 hover:text-red-500 transition-colors p-1"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
                            </svg>
                        </button>
                    </div>
                </template>
            </div>
        </div>
        
        <!-- Cart Footer -->
        <div x-show="cartItems.length > 0" class="sticky bottom-0 bg-white border-t border-gray-200 p-6">
            <!-- Coupon Code -->
            <div class="mb-4">
                <div class="flex space-x-2">
                    <input 
                        type="text" 
                        placeholder="Coupon code"
                        x-model="couponCode"
                        class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:border-primary-500 focus:ring-2 focus:ring-primary-200"
                    >
                    <button 
                        @click="applyCoupon()"
                        class="px-4 py-2 bg-gray-100 text-gray-700 rounded-lg hover:bg-gray-200 transition-colors"
                    >
                        Apply
                    </button>
                </div>
                <div x-show="couponMessage" class="mt-2 text-sm" :class="couponSuccess ? 'text-green-600' : 'text-red-600'" x-text="couponMessage"></div>
            </div>
            
            <!-- Order Summary -->
            <div class="space-y-2 mb-4">
                <div class="flex justify-between text-sm">
                    <span>Subtotal</span>
                    <span x-text="`₹${subtotal.toLocaleString()}`"></span>
                </div>
                <div class="flex justify-between text-sm">
                    <span>Shipping</span>
                    <span x-text="shipping === 0 ? 'Free' : `₹${shipping.toLocaleString()}`"></span>
                </div>
                <div x-show="discount > 0" class="flex justify-between text-sm text-green-600">
                    <span>Discount</span>
                    <span x-text="`-₹${discount.toLocaleString()}`"></span>
                </div>
                <div class="border-t border-gray-200 pt-2 flex justify-between font-semibold">
                    <span>Total</span>
                    <span x-text="`₹${total.toLocaleString()}`"></span>
                </div>
            </div>
            
            <!-- Action Buttons -->
            <div class="space-y-3">
                <button 
                    @click="proceedToCheckout()"
                    class="w-full bg-primary-600 text-white py-3 rounded-lg font-semibold hover:bg-primary-700 transition-colors"
                >
                    Proceed to Checkout
                </button>
                <button 
                    @click="closeCart()"
                    class="w-full bg-gray-100 text-gray-700 py-3 rounded-lg font-semibold hover:bg-gray-200 transition-colors"
                >
                    Continue Shopping
                </button>
            </div>
            
            <!-- Trust Indicators -->
            <div class="mt-4 pt-4 border-t border-gray-200">
                <div class="flex items-center justify-center space-x-4 text-xs text-gray-500">
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Secure Checkout</span>
                    </div>
                    <div class="flex items-center space-x-1">
                        <svg class="w-4 h-4 text-green-500" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                        </svg>
                        <span>Free Shipping</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
function cartSidebar() {
    return {
        isOpen: false,
        cartItems: [],
        couponCode: '',
        couponMessage: '',
        couponSuccess: false,
        appliedCoupon: null,
        
        init() {
            this.loadCart();
            
            // Listen for add to cart events
            this.$watch('cartItems', () => {
                this.saveCart();
            }, { deep: true });
        },
        
        get subtotal() {
            return this.cartItems.reduce((sum, item) => sum + (item.price * item.quantity), 0);
        },
        
        get shipping() {
            return this.subtotal >= 5000 ? 0 : 200; // Free shipping over ₹5000
        },
        
        get discount() {
            if (this.appliedCoupon) {
                return this.appliedCoupon.type === 'percentage' 
                    ? (this.subtotal * this.appliedCoupon.value) / 100
                    : this.appliedCoupon.value;
            }
            return 0;
        },
        
        get total() {
            return this.subtotal + this.shipping - this.discount;
        },
        
        toggleCart() {
            this.isOpen = !this.isOpen;
            if (this.isOpen) {
                document.body.style.overflow = 'hidden';
            } else {
                document.body.style.overflow = '';
            }
        },
        
        closeCart() {
            this.isOpen = false;
            document.body.style.overflow = '';
        },
        
        addToCart(product) {
            const existingItem = this.cartItems.find(item => item.id === product.id);
            
            if (existingItem) {
                existingItem.quantity += 1;
            } else {
                this.cartItems.push({
                    id: product.id,
                    name: product.name,
                    brand: product.brand,
                    price: product.price,
                    image: product.image,
                    quantity: 1
                });
            }
            
            // Show success message
            this.$dispatch('cart-updated', { action: 'added', product });
        },
        
        updateQuantity(productId, newQuantity) {
            if (newQuantity <= 0) {
                this.removeItem(productId);
                return;
            }
            
            const item = this.cartItems.find(item => item.id === productId);
            if (item) {
                item.quantity = newQuantity;
            }
        },
        
        removeItem(productId) {
            this.cartItems = this.cartItems.filter(item => item.id !== productId);
            this.$dispatch('cart-updated', { action: 'removed', productId });
        },
        
        applyCoupon() {
            if (!this.couponCode.trim()) {
                this.couponMessage = 'Please enter a coupon code';
                this.couponSuccess = false;
                return;
            }
            
            // Simulate API call
            const validCoupons = {
                'WELCOME10': { type: 'percentage', value: 10 },
                'SAVE500': { type: 'fixed', value: 500 },
                'FREESHIP': { type: 'shipping', value: 0 }
            };
            
            const coupon = validCoupons[this.couponCode.toUpperCase()];
            
            if (coupon) {
                this.appliedCoupon = coupon;
                this.couponMessage = 'Coupon applied successfully!';
                this.couponSuccess = true;
            } else {
                this.couponMessage = 'Invalid coupon code';
                this.couponSuccess = false;
            }
        },
        
        proceedToCheckout() {
            if (this.cartItems.length === 0) {
                return;
            }
            
            // Save cart data for checkout
            localStorage.setItem('dcare-checkout-cart', JSON.stringify({
                items: this.cartItems,
                subtotal: this.subtotal,
                shipping: this.shipping,
                discount: this.discount,
                total: this.total,
                coupon: this.appliedCoupon
            }));
            
            window.location.href = '/checkout';
        },
        
        loadCart() {
            const savedCart = localStorage.getItem('dcare-cart');
            if (savedCart) {
                this.cartItems = JSON.parse(savedCart);
            }
        },
        
        saveCart() {
            localStorage.setItem('dcare-cart', JSON.stringify(this.cartItems));
        }
    }
}
</script>
