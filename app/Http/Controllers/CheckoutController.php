<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\ShipmentInfo;
use App\Models\OrderItem;
use App\Models\CartItem;

use Illuminate\Support\Facades\Auth;
use App\Models\User; // Assuming your user model is located in the App\Models namespace
use Illuminate\Support\Facades\Session;



class CheckoutController extends Controller
{
    public function placeOrder(Request $request)
    {
        // Validate the form data
        $request->validate([
            'firstname' => 'required',
            'email' => 'required|email',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zip' => 'required',
            'cardname' => 'required',
            'cardnumber' => 'required',
            'expmonth' => 'required',
            'expyear' => 'required',
            'cvv' => 'required',
            // Add validation rules for other fields as needed
        ]);

        $user_id = Auth::guard('user')->id();
        $shipmentInfo = new ShipmentInfo();

        // Fill the shipment information from the request

        $shipmentInfo->user_id = $user_id;
        $shipmentInfo->full_name = $request->input('firstname');
        $shipmentInfo->email = $request->input('email');
        $shipmentInfo->address = $request->input('address');
        $shipmentInfo->city = $request->input('city');
        $shipmentInfo->state = $request->input('state');
        $shipmentInfo->zip = $request->input('zip');
        $shipmentInfo->card_name = $request->input('cardname');
        $shipmentInfo->card_number = $request->input('cardnumber');
        $shipmentInfo->exp_month = $request->input('expmonth');
        $shipmentInfo->exp_year = $request->input('expyear');
        $shipmentInfo->cvv = $request->input('cvv');
        $shipmentInfo->save();

        $order = new order();
        $order->user_id=$user_id;
        $order->save();

        $cartItems = CartItem::where('cart_id', $user_id)->get();
        foreach ($cartItems as $cartItem) {
        $orderItem = new orderItem();
        $orderItem->order_id = $order->id;
        $orderItem->product_id = $cartItem->product_id;
        $orderItem->quantity = $cartItem->quantity;
        $orderItem->size = $cartItem->size;
        $orderItem->save();
    }

    // Clear the user's cart
    CartItem::where('cart_id', $user_id)->delete();



        echo "<script>alert('Thank you! Your order has been placed.'); window.location.href='/';</script>";


        
    }
}
