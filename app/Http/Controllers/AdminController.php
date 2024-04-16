<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();
        $products = Product::all();
        $orderItems = OrderItem::all();
        
        return view('admin', compact('users', 'products', 'orderItems'));
    }

    public function editUser($id)
    {
        $user = User::find($id);
        return view('edit_user')->with('user', $user);
    }

    public function updateUser(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        // Update other fields as needed
        $user->save();

        return redirect()->route('admin.index')->with('success', 'User updated successfully.');
        // Add other controller methods for editing and deleting users, products, and order items
}

public function deleteUser($id)
{
    $user= User::find($id);
    $user->delete();
    return redirect()->back()->with('success', 'User deleted successfully.');



}
}