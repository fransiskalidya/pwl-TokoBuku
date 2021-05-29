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

/**Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/', [HomeController::class, 'index']);
Route::get('/login', [HomeController::class, 'login']);
Route::get('/signin', [HomeController::class, 'signin']);
Route::get('/forget-password', [HomeController::class, 'forgetPassword']);


Route::get('/cart', [HomeController::class, 'cart']);
Route::get('/checkout', [HomeController::class, 'checkout']);
Route::get('/shop', [HomeController::class, 'shop']);

Route::get('/pricing', [HomeController::class, 'pricing']);
Route::get('/confirmation', [HomeController::class, 'confirmation']);
Route::get('/product-single', [HomeController::class, 'productSingle']);

Route::get('/shop-sidebar', [HomeController::class, 'shopSidebar']);
Route::get('/contact', [HomeController::class, 'contact']);
Route::get('/about', [HomeController::class, 'about']);

Route::get('/404', [HomeController::class, 'notFound']);
Route::get('/coming-soon', [HomeController::class, 'comingSoon']);
Route::get('/FAQ', [HomeController::class, 'faq']);

Route::get('/dashboard', [HomeController::class, 'dashboard']);
Route::get('/order', [HomeController::class, 'order']);
Route::get('/address', [HomeController::class, 'address']);
Route::get('/profile-details', [HomeController::class, 'profileDetails']);

Route::get('/blog-left-sidebar', [HomeController::class, 'blogLeftSidebar']);
Route::get('/blog-right-sidebar', [HomeController::class, 'blogRightSidebar']);
Route::get('/blog-full-width', [HomeController::class, 'blogFullWidth']);

Route::get('/blog-grid', [HomeController::class, 'blogGrid']);
Route::get('/blog-single', [HomeController::class, 'blogSingle']);
Route::get('/typography', [HomeController::class, 'typography']);

Route::get('/buttons', [HomeController::class, 'buttons']);
Route::get('/alerts', [HomeController::class, 'alerts']);


