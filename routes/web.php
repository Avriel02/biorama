<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailCheckoutController;
use App\Http\Controllers\MitraController;


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
    return view('beranda');
});

Route::get('/produk', function () {
    return view('produk');
});

Route::get('/checkout', function () {
    return view('chekcout');
});
Route::get('/detailcheckout', function () {
    return view('detailchekcout');
});


Route::post('/beranda', [SearchController::class, 'search'])->name('search');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/detailcheckout', [DetailCheckoutController::class, 'index'])->name('detailcheckout');
Route::get('/detailmitra', [MitraController::class, 'show'])->name('detailmitra');