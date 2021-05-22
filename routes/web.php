<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
})->name('home-page');


Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');

Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/all-products', [ProductsController::class, 'index'])->name('all-products');
Route::get('/shopping-cart', [CartController::class, 'index'])->name('shopping-cart');
Route::post('/shopping-cart', [CartController::class, 'store'])->name('shopping-cart-store');


Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/categories/{category}', function () {
    return view('category');
})->name('category');

Route::get('/categories/{category}/{product}', function () {
    return view('product');
})->name('product');
