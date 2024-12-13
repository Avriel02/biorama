<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\DetailCheckoutController;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;




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
Route::get('/', function () { 
    return view('auth.login'); 
});



Route::post('/beranda', [SearchController::class, 'search'])->name('search');
Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda');
Route::get('/produk', [ProductController::class, 'index'])->name('produk');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/detailcheckout', [DetailCheckoutController::class, 'index'])->name('detailcheckout');
Route::get('/detailmitra', [MitraController::class, 'show'])->name('detailmitra');



Route::get('/login', [LoginController::class, 'index'])->name('login'); // Mengatur rute untuk halaman login
Route::post('/login', [LoginController::class, 'store'])->name('login.store'); // Mengatur rute untuk proses login
Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Mengatur rute untuk proses logout
route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
   Route::put('/profile', [UserController::class, 'update'])->name('profile.update');
});


