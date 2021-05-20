<?php

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', function () {
    return view('user-profile');
})->name('profile');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/all-products', function () {
    return view('all-products');
})->name('all-products');

Route::get('/shopping-cart', function () {
    return view('shopping-cart');
})->name('shopping-cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/categories/{category}', function () {
    return view('category');
})->name('category');

Route::get('/categories/{category}/{product}', function () {
    return view('product');
})->name('product');
