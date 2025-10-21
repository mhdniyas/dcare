<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;

class CartController extends Controller
{
    /**
     * Add item to cart
     */
    public function add(Request $request): JsonResponse
    {
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'integer|min:1|max:10'
        ]);
        
        $productId = $request->get('product_id');
        $quantity = $request->get('quantity', 1);
        
        // Mock response - replace with actual cart logic
        return response()->json([
            'success' => true,
            'message' => 'Product added to cart successfully',
            'cart_item' => [
                'product_id' => $productId,
                'quantity' => $quantity,
                'added_at' => now()->toISOString()
            ]
        ]);
    }
    
    /**
     * Update cart item quantity
     */
    public function update(Request $request, $id): JsonResponse
    {
        $request->validate([
            'quantity' => 'required|integer|min:1|max:10'
        ]);
        
        $quantity = $request->get('quantity');
        
        // Mock response - replace with actual cart logic
        return response()->json([
            'success' => true,
            'message' => 'Cart item updated successfully',
            'cart_item' => [
                'id' => $id,
                'quantity' => $quantity,
                'updated_at' => now()->toISOString()
            ]
        ]);
    }
    
    /**
     * Remove item from cart
     */
    public function remove($id): JsonResponse
    {
        // Mock response - replace with actual cart logic
        return response()->json([
            'success' => true,
            'message' => 'Item removed from cart successfully',
            'removed_item_id' => $id
        ]);
    }
    
    /**
     * Get cart contents
     */
    public function index(): JsonResponse
    {
        // Mock cart data - replace with actual cart logic
        $cartItems = [
            [
                'id' => 1,
                'product_id' => 1,
                'name' => 'Professional Dental Chair Deluxe',
                'brand' => 'MedTech Pro',
                'price' => 45000,
                'quantity' => 1,
                'image' => asset('images/products/dental-chair.jpg'),
                'subtotal' => 45000
            ],
            [
                'id' => 2,
                'product_id' => 2,
                'name' => 'High-Speed Surgical Airotor',
                'brand' => 'DentCare',
                'price' => 12500,
                'quantity' => 2,
                'image' => asset('images/products/airotor.jpg'),
                'subtotal' => 25000
            ]
        ];
        
        $subtotal = array_sum(array_column($cartItems, 'subtotal'));
        $shipping = $subtotal >= 5000 ? 0 : 200;
        $total = $subtotal + $shipping;
        
        return response()->json([
            'items' => $cartItems,
            'summary' => [
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total,
                'item_count' => count($cartItems)
            ]
        ]);
    }
    
    /**
     * Clear cart
     */
    public function clear(): JsonResponse
    {
        // Mock response - replace with actual cart logic
        return response()->json([
            'success' => true,
            'message' => 'Cart cleared successfully'
        ]);
    }
}
