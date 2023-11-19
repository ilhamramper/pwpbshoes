<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\adminIndexController;
use App\Http\Controllers\adminTablesController;

Auth::routes();
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop', [ShopController::class, 'shop'])->name('shop');
Route::get('/product/detail', [ProductController::class, 'detail'])->name('product.detail');
Route::get('/product/checkout', [ProductController::class, 'checkout'])->name('product.checkout');
Route::get('/cart', [CartController::class, 'cart'])->name('cart');
Route::get('/confirmation', [CartController::class, 'confirmation'])->name('confirmation');
Route::get('/wishlist', [WishlistController::class, 'wishlist'])->name('wishlist');
Route::get('/contact', [ContactController::class, 'contact'])->name('contact');

//route for admin
Route::get('/indexadmin',[adminIndexController::class,'index'])->name('indexadmin');
Route::get('/indextables',[adminTablesController::class,'index'])->name('tableadmin');
Route::resource('user',adminTablesController::class);