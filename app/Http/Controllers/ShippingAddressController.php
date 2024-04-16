<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShippingAddress;


class ShippingAddressController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'firstName' => 'required|string',
            'lastName' => 'required|string',
            // Add validation rules for other fields
        ]);

        // Create a new shipping address instance
        $shippingAddress = new ShippingAddress();
        $shippingAddress->first_name = $validatedData['firstName'];
        $shippingAddress->last_name = $validatedData['lastName'];
        // Assign values for other fields
        // ...

        // Save the shipping address to the database
        $shippingAddress->save();

       
    }
}
