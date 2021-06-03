<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function cart()
    {
        return view('cart');
    }

    /**public function checkout()
    {
        return view('checkout');
    }
*/
    public function shop()
    {
        return view('shop');
    }

    public function checkout()
    {
        return view('checkout');
    }


    public function productSingle()
    {
        return view('productSingle');
    }

    public function shopSidebar()
    {
        return view('shopSidebar');
    }

    public function contact()
    {
        return view('contact');
    }

    /**public function contact()
    {
        return view('contact');
    }
*/
    public function about()
    {
        return view('about');
    }

    public function login()
    {
        return view('login');
    }

    public function signin()
    {
        return view('signin');
    }

    /**public function forgetPassword()
    {
        return view('forgetPassword');
    }
*/
    public function order()
    {
        return view('order');
    }

    public function profile()
    {
        return view('profile');
    }
}
