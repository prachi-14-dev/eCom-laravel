<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\UserController;
Use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});

Route::view('/signup','register');

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});

Route::post('/login',[UserController::class,'login']);
Route::post('/signup',[UserController::class,'signup']);
Route::post('/logout',[UserController::class,'logout']);

Route::get('/',[ProductController::class,'index']);
Route::get('/detail/{id}',[ProductController::class,'detail']);
Route::get('/search',[ProductController::class,'search']);
Route::post('/add_to_cart',[ProductController::class,'addToCart']);
Route::get('/cart_list',[ProductController::class,'cartList']);
Route::get('/remove_cart_item/{id}',[ProductController::class,'removeCartItem']);
Route::get('/order_now',[ProductController::class,'orderNow']);
Route::post('/place_order',[ProductController::class,'placeOrder']);
Route::get('/my_orders',[ProductController::class,'myOrders']);


