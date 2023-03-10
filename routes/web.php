<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
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
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');

Auth::routes();

/*------------------------------------------
--------------------------------------------
All Normal Users Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'checkRole:admin'])->group(function () {
	Route::get('/admin', [DashboardController::class, 'dashboard'])->name('dashboard');
	Route::get('/create', [DashboardController::class, 'createproduct'])->name('createproduct');
	Route::get('/orders', [DashboardController::class, 'ordersproduct'])->name('ordersproduct');
	Route::get('/edit', [DashboardController::class, 'editproduct'])->name('editsproduct');
	Route::get('/profile', [DashboardController::class, 'profileadmin'])->name('profileadmin');
	Route::get('/customer', [DashboardController::class, 'customers'])->name('customers');

});

Route::middleware(['auth', 'checkRole:user'])->group(function () {
	Route::get('/checkout', [HomeController::class, 'checkout'])->name('checkout');   
	Route::get('/wishlist', [HomeController::class, 'wishlist'])->name('wishlist');
	Route::get('/shoping-cart', [HomeController::class, 'shopingcart'])->name('shoping-cart');
	Route::get('/shop-details', [HomeController::class, 'shopdetails'])->name('shop-details');   
});



Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
Route::get('/companyprofile', [HomeController::class, 'companyprofile'])->name('companyprofile');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/shop-grid', [HomeController::class, 'shopgrid'])->name('shop-grid');


