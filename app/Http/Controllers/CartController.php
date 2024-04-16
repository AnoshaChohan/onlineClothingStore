<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\CartItem;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CartController extends Controller
{

    // public function showCart()
    // {
    //     if (Auth::guard('user')->check()) {
    //         $user = Auth::guard('user')->user();
    //         $cart = $user->cart; // Assuming you have a relationship set up correctly
    //         $cartItems = $cart->items; // Assuming `items` is the relationship method
    //         return view('cart', ['products' => $cartItems]);
    //     } else {
    //         // Handle the case when the user is not authenticated
    //         // For example, you can redirect them to the login page
    //         return redirect()->route('login')->with('error', 'Please log in to view your cart.');
    //     }
    // }
    
    public function showCart()
{
    if (Auth::guard('user')->check()) {
        $user = Auth::guard('user')->user();
        $cart = $user->cart;

        if ($cart) {
            $cartItems = $cart->items; // Assuming `items` is the relationship method
            // return view('cart', ['cartItems' => $cartItems]); // Pass $cartItems to the view
            return view('cart', [ 'cartItems' => $cartItems]);

        } else {

            // Handle the case when the user has no cart
            // For example, redirect them to the homepage with a message
            return redirect()->route('/cart')->with('error', 'Your cart is empty.');
        }
    } else {
        return redirect()->route('login')->with('error', 'Please log in to view your cart.');
    }
}

      public function showCart2()
{
    if (Auth::guard('user')->check()) {
        $user = Auth::guard('user')->user();
        $cart = $user->cart;

        if ($cart) {
            $cartItems = $cart->items; // Assuming `items` is the relationship method

            // Fetch product details for each cart item
            foreach ($cartItems as $cartItem) {
                $product = Product::find($cartItem->product_id); // Assuming `Product` is your product model
                $cartItem->name = $product->name;
                $cartItem->price = $product->price;
            }

            // Calculate total price

            return view('checkout', ['cartItems' => $cartItems]);

        } else {
            // Handle the case when the user has no cart
            // For example, redirect them to the homepage with a message
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }
    } else {
        return redirect()->route('login')->with('error', 'Please log in to view your cart.');
    }
}




    


public function addToCart(Request $request)
{
    // Validate the incoming request
    $request->validate([
        'product_id' => 'required|integer|min:1',
        'quantity' => 'required|integer|min:1',
        'size'=>'required'
    ]);

    // Check if the user is authenticated
    if (Auth::guard('user')->check()) {
        // Retrieve the authenticated user
        $user = Auth::guard('user')->user();
        // Retrieve the product details from the request
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $size = $request->input('size');

        
        // Retrieve the user's cart or create a new one if it doesn't exist
        $cart = $user->cart()->firstOrCreate([]);
      
        // Manually create a new cart item
        $cartItem = new CartItem([
            'product_id' => $productId,
            'quantity' => $quantity,
            'size' => $size
            // Add other necessary fields here
        ]);


        // Save the cart item
        $cart->items()->save($cartItem);

        $product = [
            'product_id' => $productId,
            'quantity' => $quantity,
            'size' => $size
        ];
        $request->session()->push('cart', $product);
        // Redirect back to the previous page with a success message
        return redirect()->route('cart.show');
    } else {
        // If the user is not authenticated, redirect them to the login page
        return redirect()->route('login')->with('error', 'Please log in to add products to your cart.');
    }
}

public function deleteCartItem($cartItemId)
    {
        // Retrieve the cart item
        $cartItem = CartItem::findOrFail($cartItemId);

        // Delete the cart item
        $cartItem->delete();

        // Redirect back to the cart page with a success message
        return redirect()->route('cart.show')->with('success', 'Cart item deleted successfully.');
    }

   
    
    

}



