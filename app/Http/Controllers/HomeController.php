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
    /**public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('index');
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

    public function pricing()
    {
        return view('pricing');
    }

    public function confirmation()
    {
        return view('confirmation');
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

    public function notFound()
    {
        return view('404');
    }

    public function comingSoon()
    {
        return view('comingSoon');
    }

    public function faq()
    {
        return view('faq');
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
    public function forgetPassword()
    {
        return view('forgetPassword');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function order()
    {
        return view('order');
    }

    public function address()
    {
        return view('address');
    }

    public function profileDetails()
    {
        return view('profileDetails');
    }
}
