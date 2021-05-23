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

Route::get('/', [App\Http\Controllers\ProductsController::class, 'home'])->name('home-page');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Auth::routes();


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/profile', [ProfileController::class, 'show'])->name('profile');
Route::post('/profile', [ProfileController::class, 'update'])->name('profile-update');


Route::get('/create', function () {
    return view('create');
})->name('create');

Route::get('/categories', [\App\Http\Controllers\CategoriesController::class, 'index'])->name('categories');
Route::get('/all-products', [App\Http\Controllers\ProductsController::class, 'index'])->name('all-products');

Route::get('/shopping-cart', [App\Http\Controllers\CartController::class, 'index'])->name('shopping-cart');
Route::post('/shopping-cart', [App\Http\Controllers\CartController::class, 'store'])->name('shopping-cart-store');
Route::delete('/shopping-cart/{product}', [App\Http\Controllers\CartController::class, 'destroy'])->name('shopping-cart-destroy');


Route::get('/checkout',[App\Http\Controllers\CheckoutController::class, 'index'])->name('checkout');
Route::post('/checkout',[App\Http\Controllers\CheckoutController::class, 'store'])->name('checkout-store');
Route::get('/thankyou',[App\Http\Controllers\ConfirmationController::class, 'index'])->name('confirmation');


Route::get('/categories/{category}', [\App\Http\Controllers\CategoriesController::class, 'category'])->name('category');
Route::get('/categories/{category}/{product}', [App\Http\Controllers\ProductsController::class, 'product'])->name('product');
