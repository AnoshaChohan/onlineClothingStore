<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

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

Route::view('/', 'welcome');
Route::view('/shop','shop')->name('shop');
Route::view('/sproduct','sproducts');
Route::view('/blog','blog')->name('blog');
Route::view('/about','about');
Route::view('/contactUs','contactUs');
Route::view('/cart','cart');
Route::view('/profile','profile');




Route::view('/women', 'products.women')->name('women');
Route::view('/men','products.men')->name('men');
Route::view('/kid','productskid')->name('kid');
Route::view('/sale','products.sale')->name('sale');
Route::view('/womenWinter','products.womenwinter')->name('womenWinter');
Route::view('/womenSummer','products.womenSummer')->name('womenSummer');

