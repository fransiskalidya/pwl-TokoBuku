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

    public function blogLeftSidebar()
    {
        return view('blogLeftSidebar');
    }

    public function blogRightSidebar()
    {
        return view('blogRightSidebar');
    }

    public function blogFullWidth()
    {
        return view('blogFullWidth');
    }

    public function blogGrid()
    {
        return view('blogGrid');
    }

    public function blogSingle()
    {
        return view('blogSingle');
    }

    public function typography()
    {
        return view('typography');
    }

    public function buttons()
    {
        return view('buttons');
    }

    public function alerts()
    {
        return view('alerts');
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
