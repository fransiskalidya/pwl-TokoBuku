<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\Buku1Controller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PesanController;
use App\Http\Controllers\HistoryController;
use App\Models\Buku;
use App\Models\Pesanan;
use App\Models\pesananDetails;
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

Route::resource('/', Buku1Controller::class);

Route::get('/konfirm', function () {
    return view('purchase-confirmation');
});

// Route::get('/profile', function () {
//     return view('profile');
// });

//Route::get('/', [HomeController::class, 'index']);
//Route::get('/login', [HomeController::class, 'login']);


//Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/signin', [BukuController::class, 'signin']);


Route::get('/cart', [BukuController::class, 'cart']);
Route::get('check-out', [PesanController::class, 'check_out']);
Route::get('/home', [BukuController::class, 'shop']);

// Route::get('/product-single/{id}', [HomeController::class, 'show']);

Route::get('/shop-sidebar', [BukuController::class, 'shopSidebar']);
Route::get('/contact', [BukuController::class, 'contact']);
Route::get('/about', [BukuController::class, 'about']);

Route::resource('profile', UserController::class);
Route::get('/kategori/{id}', [HomeController::class, 'show']);

Route::get('/pesan/{id}', [PesanController::class, 'index']);
Route::post('/pesan/{id}', [PesanController::class, 'pesan']);
Route::delete('/check-out/{id}', [PesanController::class, 'delete']);

Route::get('konfirmasi-check-out', [PesanController::class, 'konfirmasi']);
Route::get('checkout_pdf', [PesanController::class, 'konfirmasi']);

Route::get('/history/cetak_pdf/{id}', [HistoryController::class, 'cetak_pdf'])->name('pesanan.pdf');

//Route::get('buku/pesanan/{id}', [PesanController::class, 'pesan'])->name('pesan.checkout_pdf');

Route::get('history', [HistoryController::class, 'index']);
Route::get('history/{id}', [HistoryController::class, 'detail']);
// Route::resource('profile', UserController::class);

Auth::routes();
