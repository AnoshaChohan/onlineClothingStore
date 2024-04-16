<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Add this line to import the Auth facade
use App\Models\User; // Assuming your user model is located in the App\Models namespace
use App\Models\OrderItem; // Assuming you have an Order model

class UserController extends Controller
{
    public function showProfile()
    {
        // Check if the user is authenticated
        if (Auth::guard('user')->check()) {
            // Retrieve the authenticated user
            $user = Auth::guard('user')->user();
            $orderItems = $user->orders()->with('orderItems')->get()->flatMap->orderItems;

            // You can now use the $user object to access user information
            return view('profile', ['user' => $user, 'orderItems' => $orderItems]); // Corrected the variable name
        } else {
            // User is not authenticated, handle accordingly
            return redirect()->route('login')->with('error', 'Please log in to view your profile.');
        }
    }
}
