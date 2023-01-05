<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/companyprofile', [HomeController::class, 'companyprofile'])->name('companyprofile');
Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop-details', [HomeController::class, 'shopdetails'])->name('shop-details');
Route::get('/shop-grid', [HomeController::class, 'shopgrid'])->name('shop-grid');
Route::get('/shoping-cart', [HomeController::class, 'shopingcart'])->name('shoping-cart');
Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
