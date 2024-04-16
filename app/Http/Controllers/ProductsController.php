<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Auth; // Import the Auth facade
use Illuminate\Support\Facades\DB; // Import the DB facade

use App\Models\ViewedProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductsController;

class ProductsController extends Controller

{
    public function index()
    {
        $products = Product::all();
        return view('shop', ['products' => $products]);
    }

   

    // Add more controller methods as needed


    public function show($id)
    {
        // Retrieve the product with the given ID from the database
        $product = Product::find($id);
    
        // Check if the product exists
        if (!$product) {
            // Product not found, you can handle this case accordingly, such as redirecting to an error page or returning a response
            abort(404); // This will return a 404 HTTP response
        }
        // Get the authenticated user
  

        // Pass the product data to the view and return the view
        return view('cart', ['cartItems' => [$product]]);
    }

    public function sproductView($id)
    {
        // Fetch the product details based on the provided ID
        $product = Product::find($id);

        // Check if the product exists
        if (!$product) {
            abort(404); // If product not found, return a 404 Not Found response
        }
        $user = Auth::guard('user')->user();

        // Check if the user is authenticated
        DB::table('viewed_products')->insert([
            'user_id' => $user->id,
            'product_id' => $product->id,
        ]);

        // Pass the product details to the view
        return view('sproducts', compact('product'));
    }


//     public function recommendProducts()
// {
//     // Get the current authenticated user's ID
//     $user = Auth::guard('user')->user();

//     // Retrieve the viewed products associated with the current user's ID
//     $viewedProducts = DB::table('viewed_products')
//                         ->join('products', 'viewed_products.product_id', '=', 'products.id')
//                         ->where('viewed_products.user_id', $user->id)
//                         ->select('products.name', 'products.description', 'products.price')
//                         ->get();

//     // Pass the viewedProducts variable to the welcome view
//     return view('welcome', ['viewedProducts' => $viewedProducts]);
// }

// public function recommendProducts()
// {
//     // Get the current authenticated user's ID
//     $user = Auth::guard('user')->user();

//     // Retrieve the viewed products' IDs associated with the current user's ID
//     $viewedProductIds = DB::table('viewed_products')
//                         ->where('user_id', $user->id)
//                         ->pluck('product_id')
//                         ->toArray();

//     // Query products based on user preferences
//     $recommendedProducts = DB::table('products')
//                             ->whereNotIn('id', $viewedProductIds)
//                             ->where(function ($query) use ($user) {
//                                 $query->whereIn('description', function ($innerQuery) use ($user) {
//                                     $innerQuery->select('description')
//                                         ->from('products')
//                                         ->whereIn('id', $user->viewedProducts()->pluck('product_id')->toArray())
//                                         ->groupBy('description')
//                                         ->havingRaw('COUNT(*) > 1'); // You can adjust the threshold as needed
//                                 })->orWhereIn('name', function ($innerQuery) use ($user) {
//                                     $innerQuery->select('name')
//                                         ->from('products')
//                                         ->whereIn('id', $user->viewedProducts()->pluck('product_id')->toArray())
//                                         ->groupBy('name')
//                                         ->havingRaw('COUNT(*) > 1'); // You can adjust the threshold as needed
//                                 });
//                             })
//                             ->inRandomOrder() // Or implement your recommendation algorithm here
//                             ->limit(5) // Limit the number of recommended products
//                             ->get();

//     return view('welcome', ['products' => $recommendedProducts]);
// }



public function recommendProducts()
{
    // Get the current authenticated user's ID
    $user = Auth::guard('user')->user();

    // Get the searched product type (e.g., "t-shirt")
    $searchedProductType = request()->input('search');

    // Retrieve the viewed products' IDs associated with the current user's ID
    $viewedProductIds = DB::table('viewed_products')
                        ->where('user_id', $user->id)
                        ->pluck('product_id')
                        ->toArray();

    // Query products based on user preferences and searched product type
    $recommendedProductsQuery = DB::table('products')
                            ->whereNotIn('id', $viewedProductIds)
                            ->where(function ($query) use ($user, $searchedProductType) {
                                $query->where('description', 'like', '%' . $searchedProductType . '%')
                                      ->orWhere('name', 'like', '%' . $searchedProductType . '%');
                            })
                            ->inRandomOrder(); // Or implement your recommendation algorithm here

    // Retrieve recommended products, ensuring a minimum of 3 and a maximum of 5
    $recommendedProducts = $recommendedProductsQuery->take(5)->get();
    $count = $recommendedProducts->count();

    if ($count < 3) {
        // If less than 3 recommendations are found, fetch additional products
        $additionalProducts = $recommendedProductsQuery
            ->take(5 - $count) // Fetch the remaining required recommendations
            ->get();

        // Merge the additional products with the existing recommendations
        $recommendedProducts = $recommendedProducts->concat($additionalProducts);
    }

    return view('welcome', ['products' => $recommendedProducts]);
}



    
    
}




