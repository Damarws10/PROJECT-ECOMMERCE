<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',["except" => ["shopgrid", "companyprofile", "blog", "contact"]]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        return view('home');

    } 

    // public function login()
    // {
    //     return view('auth.login');

    // }

    public function blog()
    {
        return view('blog');
    }

    public function companyprofile()
    {
        return view('companyprofile');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function contact()
    {
        return view('contact');
    }

    public function shopingcart()
    {
        return view('shoping-cart');
    }

    public function shopdetails()
    {
        return view('shop-details');
    }

    public function shopgrid()
    {
        return view('shop-grid');
    }

    public function wishlist()
    {
        return view('wishlist');
    }

}
