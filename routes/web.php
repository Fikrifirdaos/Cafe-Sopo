<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CafeController;

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

Route::get ('/', function () {
    return view('dashboard.index');
});

Route::get ('/keranjang', [CafeController::class,'keranjang']);
Route::get ('/Pesanan/{$id}', [CafeController::class,'pesanan'])->name('pesanan');
Route::get ('/Produk', [CafeController::class,'produk']);
Route::get('/cart', [CafeController::class, 'cart'])->name('cart');
Route::get('/add-to-cart/{id}', [CafeController::class, 'addToCart'])->name('add_to_cart');
Route::patch('update-cart', [CafeController::class, 'update'])->name('update_cart');
Route::delete('remove-from-cart', [CafeController::class, 'remove'])->name('remove_from_cart');

