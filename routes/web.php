<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\UserController;
use App\Models\Buku;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/home', function () {
//     return view('home');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/konfirm', function () {
    return view('purchase-confirmation');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/login', [HomeController::class, 'login']);


Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/signin', [BukuController::class, 'signin']);


Route::get('/cart', [BukuController::class, 'cart']);
Route::get('/checkout', [BukuController::class, 'checkout']);
Route::get('/home', [BukuController::class, 'shop']);

// Route::get('/product-single/{id}', [HomeController::class, 'show']);

Route::get('/shop-sidebar', [BukuController::class, 'shopSidebar']);
Route::get('/contact', [BukuController::class, 'contact']);
Route::get('/about', [BukuController::class, 'about']);

Route::resource('profile', UserController::class);
Route::get('/kategori/{id}', [HomeController::class, 'show']);



// Route::resource('profile', UserController::class);

Auth::routes();
