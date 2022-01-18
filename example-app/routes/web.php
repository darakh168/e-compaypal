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
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [App\Http\Controllers\EcomController::class, 'index'])->name('/');
Route::get('product-list', [App\Http\Controllers\EcomController::class, 'product_list'])->name('product-list');
Route::get('add-to-cart/{product_id}', [App\Http\Controllers\MyCartController::class, 'add_to_cart'])->name('add-to-cart');
Route::get('my-cart', [App\Http\Controllers\MyCartController::class, 'my_cart'])->name('my-cart');
Route::get('remove-cart/{id}', [App\Http\Controllers\MyCartController::class, 'remove_cart'])->name('remove-cart');
Route::get('update-cart/{id}/{qty}', [App\Http\Controllers\MyCartController::class, 'update_cart'])->name('update-cart');
Route::get('profile', [App\Http\Controllers\MyCartController::class, 'profile'])->name('profile');



Route::post('paypal', [App\Http\Controllers\PayPalPaymentController::class, 'makePayment'])->name('paypal');
Route::get('getPaymentStatus', [App\Http\Controllers\PayPalPaymentController::class, 'getPaymentStatus'])->name('getPaymentStatus');


Auth::routes();
Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
