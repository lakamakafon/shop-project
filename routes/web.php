<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::post("/login", [UserController::class, 'login']);
Route::post("/register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("/detail/{id}", [ProductController::class, 'detail']);
Route::get("/search", [ProductController::class, 'search']);
Route::post("/add_to_cart", [ProductController::class, 'addToCart']);
Route::get("/cartlist", [ProductController::class, 'cartlist']);
Route::get("/removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("/ordernow", [ProductController::class, 'orderNow']);
Route::post("/orderplace", [ProductController::class, 'orderPlace']);
Route::get("/myorders", [ProductController::class, 'myOrders']);
Route::view("/register", 'register');
Route::get("/about_us", [UserController::class, 'about_us']);
Route::get("/contact", [UserController::class, 'contact']);
Route::get("/shop", [ProductController::class, 'shop']);
Route::get("/myaccount", [UserController::class, 'myaccount']);
Route::get("/shop/computers", [ProductController::class, 'getComputers']);
Route::get('/pdf/faktura/{invoice_nr}',[ProductController::class, 'createInvoice']);
