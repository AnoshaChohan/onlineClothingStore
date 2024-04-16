<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CheckoutController;


Auth::routes();
// Route::get('/login/admin', [LoginController::class, 'showAdminLoginForm']);
// Route::get('/register/admin', [RegisterController::class,'showAdminRegisterForm']);
// Route::get('/register/author',[RegisterController::class,'showAuthorRegisterForm']);
// Route::post('/login/admin', [LoginController::class,'adminLogin']);
// Route::post('/register/admin', [RegisterController::class,'createAdmin']);
Route::post('/register', [RegisterController::class,'create']);

Route::get('/loginForm', function () {
    return view('loginForm');
});

Route::post('/login', [LoginController::class,'userLogin']);



Route::post('/register', [RegisterController::class, 'create']);


Route::group(['middleware' => 'auth:admin'], function () {
Route::view('/admin', 'admin');
});
Route::get('logout', [LoginController::class,'logout']);
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

 Route::view('/shop','shop')->name('shop');
 Route::view('/sproducts', 'sproducts');
Route::get('/sproductView/{id}', [ProductsController::class, 'sproductView'])->name('sproductView');

 Route::view('/blog','blog')->name('blog');
Route::view('/about','about');
Route::view('/contactUs','contactUs');
Route::view('/cart','cart');
Route::view('/profile','profile');




Route::view('/women', 'products.women')->name('women');
Route::view('/men', 'products.men')->name('men');
Route::view('/kid', 'products.kid')->name('kid');

Route::view('/sale','products.sale')->name('sale');
Route::view('/womenWinter','products.womenwinter')->name('womenWinter');
Route::view('/womenSummer','products.womenSummer')->name('womenSummer');



Route::get('/shop', [ProductsController::class, 'index']);
Route::get('/men', [ProductsController::class, 'indexMen']);
Route::get('/women', [ProductsController::class, 'indexWomen']);
Route::get('/kid', [ProductsController::class, 'indexKid']);

// =============


Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
// ================
// Route::get('/shop', [ShopController::class, 'index'])->name('shop');
Route::get('/sproduct/{id}', [ProductsController::class, 'show']);

Route::post('/add-to-cart', [CartController::class, 'addToCart']);
Route::delete('delete-cart-item/{id}', [CartController::class, 'deleteCartItem'])->name('cart.delete');

Route::get('/checkout', [CartController::class, 'showCart2'])->name('checkout');
Route::post('/shipping', [ShippingAddressController::class, 'store'])->name('shipping.store');

use App\Http\Controllers\SizePredictionController;
use App\Http\Controllers\PredictionController;

Route::post('/predict-size',[PredictionController::class, 'predictSize']);



// Define your route
// routes/web.php
Route::get('/profile',[UserController::class, 'showProfile']);


Route::post('/place-order', [CheckoutController::class, 'placeOrder'])->name('place.order');
    Route::view('/admin', 'admin')->name('admin');

    use App\Http\Controllers\AdminController;

    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    // Add other routes for editing and deleting users, products, and order items
    Route::get('/admin/editUser/{id}', [AdminController::class, 'editUser'])->name('admin.editUser');
    Route::get('/admin/deleteUser/{id}', [AdminController::class, 'deleteUser'])->name('admin.deleteUser');
    Route::get('/admin/editProduct/{id}', [AdminController::class, 'editProduct'])->name('admin.editProduct');

    // Route for deleting products
    Route::get('/admin/deleteProduct/{id}', [AdminController::class, 'deleteProduct'])->name('admin.deleteProduct');
    
    // Route for editing order items
    Route::get('/admin/editOrderItem/{id}', [AdminController::class, 'editOrderItem'])->name('admin.editOrderItem');
    
    // Route for deleting order items
    Route::get('/admin/deleteOrderItem/{id}', [AdminController::class, 'deleteOrderItem'])->name('admin.deleteOrderItem');
    Route::post('/admin/products/{id}/update', [ProductController::class, 'update'])->name('admin.updateProduct');
// routes/web.php or routes/api.php


// Define the route for updating user information
Route::post('/admin/updateUser/{id}', [AdminController::class, 'updateUser'])->name('admin.updateUser');
Route::post('/admin/updateOrderItem/{id}', [AdminController::class, 'updateOrderItem'])->name('admin.updateOrderItem');
Route::post('/admin/updateproduct{id}', [AdminController::class, 'updateproduct'])->name('admin.updateproduct');



Route::get('/', [ProductsController::class, 'recommendProducts']);
Route::view('/welcome', 'welcome')->name('welcome');
